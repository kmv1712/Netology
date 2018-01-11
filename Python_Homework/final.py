import os
import re
import requests
import vk

user_name = "tim_leary"
access_key = "5dfd6b0dee902310df772082421968f4c06443abecbc082a8440cb18910a56daca73ac8d04b25154a1128"

url = 'https://vk.com/' + user_name

print (url)

session = vk.Session(access_key)
vk_api = vk.API(session)
user = vk_api.users.get(user_id = 5030613)
group = vk_api.groups.get(user_id = 5030613)


# print (user)
# print (group)

# Выводит по индификатору всю инф о группе groups.getById:
# print (vk_api.groups.getById(group_id = 22440983))

# Выводит по индификатору всю инф о друзьях friends.get
# print (vk_api.friends.get(user_id = 5030613))

# send = requests.get("http://api.vk.com/method/users.get?user_id=5030613").json()
# print(send)

params = {
    'group_id' : 22440983,
    'access_key': access_key
}

send = requests.get("http://api.vk.com/method/groups.getById", params ).json()
print(send['response'])
