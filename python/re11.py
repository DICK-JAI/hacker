import requests

response = requests.post("http://www.baidu.com")
response1 = requests.get("http://www.baidu.com")
print(response.status_code)
print(response1.status_code)
