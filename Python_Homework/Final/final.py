import requests
import time
import json

user_id = 171691064
access_token = "5dfd6b0dee902310df772082421968f4c06443abecbc082a8440cb18910a56daca73ac8d04b25154a1128"


def get_list_of_not_deleted_or_banned_friends():
    method = 'friends.get'
    url = 'https://api.vk.com/method/' + method
    params = {
        'user_id': user_id,
        'access_token': access_token
    }

    response_method_friends = requests.get(url, params).json()
    print('------')
    # print(response_method_friends ['response'])

    list_of_not_deleted_or_banned_friends = []
    for friend in response_method_friends['response']:
        # print(friend)
        method = 'users.get'
        url = 'https://api.vk.com/method/' + method
        params = {
            'user_id': friend,
            'access_token': access_token
        }
        response = requests.get(url, params).json()
        time.sleep(0.5)
        #         print(response)
        try:
            value = response['response'][0]['deactivated']
        except KeyError:
            list_of_not_deleted_or_banned_friends.append(friend)
    # print('-')
    #         print(response)
    #     for item in response['response'][0]:
    #         if (item != 'deactivated'):
    #             list_of_not_deleted_or_banned_friends.append(friend)
    print('-')
    # print(list_of_not_deleted_or_banned_friends)
    return list_of_not_deleted_or_banned_friends


def get_list_of_all_groups_of_friends(list_of_not_deleted_or_banned_friends):
    list_of_all_groups_of_friends = []
    for friend in list_of_not_deleted_or_banned_friends:
        # print(friend)
        method = 'groups.get'
        url = 'https://api.vk.com/method/' + method
        params = {
            'user_id': friend,
            'access_token': access_token
        }
        time.sleep(0.5)
        response = requests.get(url, params).json()
        try:
            value = response['response']
        except KeyError:
            response['response'] = [0]
            #     print(response['response'])
            #     print('---------')
        list_of_all_groups_of_friends.append(response['response'])
        # print (list_of_all_groups_of_friends)
    #     print (sum(list_of_all_groups_of_friends, []))
    list_of_all_groups_of_friends = sum(list_of_all_groups_of_friends, [])
    print('--')
    return list_of_all_groups_of_friends


def get_user_groups():
    method = 'groups.get'
    url = 'https://api.vk.com/method/' + method
    params = {
        'user_id': user_id,
        'access_token': access_token
    }

    response = requests.get(url, params).json()
    #     print(response['response'])
    user_groups = response['response']
    print('---')
    #     print(len(response['response']))
    return user_groups


def get_unique_groups_user(user_groups, list_of_all_groups_of_friends):
    unique_groups_user = []
    for item in set(user_groups).difference(list_of_all_groups_of_friends):
        unique_groups_user.append(item)
    print('----')
    #     print (unique_groups_user)
    return unique_groups_user


def get_final_unique_groups_user(unique_groups_user):
    final_unique_groups_user = []
    for item in unique_groups_user:
        method = 'groups.getById'
        url = 'https://api.vk.com/method/' + method
        params = {
            'group_id': item,
            'access_token': access_token
        }
        time.sleep(1)
        response = requests.get(url, params).json()
        final_unique_groups_user.append(response['response'][0])
    print('-----')
    # print(final_unique_groups_user)
    return final_unique_groups_user


def write_json_file(final_unique_groups_user):
    with open('total_user_groupe.json', 'w', encoding="utf-8") as f:
        json.dump(final_unique_groups_user, f, sort_keys=True, indent=2, ensure_ascii=False)
        print('------')
        f.close()


list_of_not_deleted_or_banned_friends = get_list_of_not_deleted_or_banned_friends()
list_of_all_groups_of_friends = get_list_of_all_groups_of_friends(list_of_not_deleted_or_banned_friends)
user_groups = get_user_groups()
unique_groups_user = get_unique_groups_user(user_groups, list_of_all_groups_of_friends)
final_unique_groups_user = get_final_unique_groups_user(unique_groups_user)
write_json_file(final_unique_groups_user)
