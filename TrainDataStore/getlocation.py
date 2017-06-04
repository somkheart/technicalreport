# Copyright 2016 Google Inc. All rights reserved.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# [START imports]
import os
import urllib
import json

from google.appengine.api import users
from google.appengine.ext import ndb

import jinja2
import webapp2

JINJA_ENVIRONMENT = jinja2.Environment(
	loader=jinja2.FileSystemLoader(os.path.dirname(__file__)),
	extensions=['jinja2.ext.autoescape'],
	autoescape=True)
# [END imports]


# [START TrainTransaction]	
class TrainTransaction(ndb.Model):
	appid = ndb.IntegerProperty()
	train_no = ndb.IntegerProperty()
	position_now = ndb.GeoPtProperty()
	distance_matlab = ndb.IntegerProperty()
	start_station = ndb.StringProperty()
	next_station = ndb.StringProperty()
	distance_track  = ndb.IntegerProperty()
	matlab_status = ndb.BooleanProperty()
	web_status = ndb.BooleanProperty()
	track_status = ndb.BooleanProperty()
	timestamp = ndb.DateTimeProperty(auto_now_add=True)
# [END TrainTransaction]


# [START Getlocation]	
class Getlocation(webapp2.RequestHandler):
	def get(self):	
		try:
			#train = TrainTransaction.query().order(-TrainTransaction.timestamp).get()
			train = TrainTransaction.query(TrainTransaction.appid == int(self.request.get('appid'))).get()
			reply = {}
			reply['appid'] = train.appid
			reply['train_no'] = train.train_no
			reply['latitude'] = train.position_now.lat
			reply['longtitude'] = train.position_now.lon
			reply['distance_matlab'] = train.distance_matlab
			reply['start_station'] = train.start_station
			reply['next_station'] = train.next_station
			reply['distance_track'] = train.distance_track
			reply['matlab_status'] = train.matlab_status
			reply['web_status'] = train.web_status
			reply['track_status'] = train.track_status
			json_reply = json.dumps(reply)
			self.response.write( json_reply )
		except Exception, e:
			self.response.write({'status': 'ERROR', 'error': str(e)})
			return
		
		#return json_reply
		
		#self.redirect('/')
# [END Getlocation]	

# [START app]
app = webapp2.WSGIApplication([
	('/getlocation', Getlocation),
], debug=True)
# [END app]
