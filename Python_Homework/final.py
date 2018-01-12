import requests
import time

user_id = 5030613
user_name = "tim_leary"
access_token = "5dfd6b0dee902310df772082421968f4c06443abecbc082a8440cb18910a56daca73ac8d04b25154a1128"

method = 'friends.get'
url = 'https://api.vk.com/method/' + method
params = {
    'user_id' : user_id,
    'access_token': access_token
}

response_method_friends = requests.get(url, params ).json()
# print('-------------------------------------')
# print(response_method_friends ['response'])

list_of_not_deleted_or_banned_friends = []
for friend in response_method_friends ['response']:
    # print(friend)
    method = 'users.get'
    url = 'https://api.vk.com/method/' + method
    params = {
        'user_id': friend,
        'access_token': access_token
    }
    response = requests.get(url, params).json()
    time.sleep(0.1)
    try:
        value = response['response'][0]['deactivated']
    except KeyError:
        list_of_not_deleted_or_banned_friends.append(friend)
#         print('-')
#         print(response)
#     for item in response['response'][0]:
#         if (item != 'deactivated'):
#             list_of_not_deleted_or_banned_friends.append(friend)

print (list_of_not_deleted_or_banned_friends)

list_of_all_groups_of_friends = []
for friend in list_of_not_deleted_or_banned_friends:
    # print(friend)
    method = 'groups.get'
    url = 'https://api.vk.com/method/' + method
    params = {
        'user_id': friend,
        'access_token': access_token
    }
    time.sleep(0.1)
    response = requests.get(url, params).json()
    try:
        value = response['response']
    except KeyError:
        response['response'] = [0]
#     print(response['response'])
#     print('---------')
    list_of_all_groups_of_friends.append(response['response'])

# print (list_of_all_groups_of_friends)

list_of_all_groups_of_friends = sum(list_of_all_groups_of_friends, [])

method = 'groups.get'
url = 'https://api.vk.com/method/' + method
params = {
    'user_id': user_id,
    'access_token': access_token
}

response = requests.get(url, params ).json()
print(response['response'])
user_groups = response['response']
# print('-------------------------------------')
# print(len(response['response']))

unique_groups_user = []
for group in user_groups:
    for groups_of_friends in list_of_all_groups_of_friends:
        if group != groups_of_friends:
            unique_groups_user.append(group)

print(unique_groups_user)