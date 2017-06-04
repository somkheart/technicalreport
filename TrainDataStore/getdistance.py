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

# [START Getdistance]
class Getdistance(webapp2.RequestHandler):
	def get(self):
		i = TrainTransaction.query().order(-TrainTransaction.timestamp).get()
		try:
			train = TrainTransaction()
			train.appid = i.appid + 1
			train.train_no = 1
			lat = float(self.request.get('lat'))
			lon = float(self.request.get('lon'))			
			train.position_now = ndb.GeoPt(lat,lon)
			train.distance_matlab = int(self.request.get('distance'))
			train.start_station = 'Narita'
			train.next_station = 'Tokyo'
			train.distance_track = 0
			train.matlab_status = True
			train.web_status = False
			train.track_status = False
			train.put()
			self.response.write({'status': 'OK'})
		except Exception, e:			
			self.response.write({'status': 'ERROR', 'error': str(e)})
			return
		
		#self.redirect('/')
# [END Getdistance]

# [START app]
app = webapp2.WSGIApplication([
	('/getdistance', Getdistance),
], debug=True)
# [END app]
