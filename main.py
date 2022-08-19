import json
import time
import mysql.connector
import requests

#establishing the connection
conn = mysql.connector.connect(
   user='root', password='toor', host='127.0.0.1', database='cards')

#Creating a cursor object using the cursor() method
cursor = conn.cursor()


test = True
while test == True:

    response_API1 = requests.get('http://192.168.1.18:7777/')
    data1 = response_API1.text
    card1 = json.loads(data1)

    id1 =card1['id']
    lat1 =card1['lat']
    lng1 =card1['lng']
    speed1 =card1['speed']
    sat1 =card1['sat']

    response_API2 = requests.get('http://192.168.1.18:7778/')
    data2 = response_API2.text
    card2 = json.loads(data2)  

    id2 =card2['id']
    lat2 =card2['lat']
    lng2 =card2['lng']
    speed2 =card2['speed']
    sat2 =card2['sat']

    response_API3 = requests.get('http://192.168.1.18:7779/')
    data3 = response_API3.text
    card3 = json.loads(data3)

    id3 =card3['id']
    lat3 =card3['lat']
    lng3 =card3['lng']
    speed3 =card3['speed']
    sat3 =card3['sat']

    print(f"id:{id1} lat:{lat1} lng:{lng1} speed:{speed1} sat:{sat1}\n")
    # Preparing SQL query to INSERT a record into the database.
    sql1 =f"INSERT INTO card1 (lat, lng, speed, sat, realtime) values ({lat1},{lng1},{speed1},{sat1},now())"
    sql2 =f"INSERT INTO card2 (lat, lng, speed, sat, realtime) values ({lat2},{lng2},{speed2},{sat2},now())"
    sql3 =f"INSERT INTO card3 (lat, lng, speed, sat, realtime) values ({lat3},{lng3},{speed3},{sat3},now())"

    cursor.execute(sql1)
    cursor.execute(sql2)
    cursor.execute(sql3)
    conn.commit()
    time.sleep(5)
