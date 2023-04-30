import mwclient
import json

# Connect to the wiki site
site = mwclient.Site('lol.fandom.com', path='/')

# Set up the cargoquery parameters
params ={
    'limit': 'max',
    'tables':'Players',
    'fields':'_pageName=Name,Country,Team,Role',
}
response = site.api('cargoquery', **params)


# Write the results to data.json
with open("./data.json", "w") as f:
    json.dump(response, f)
