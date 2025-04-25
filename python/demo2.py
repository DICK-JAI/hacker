class myclass:
    def __init__(self,data):
        print("new object")
        self.data = data

    def show_data(self):
        print(self.data)

    def __del__(self):
        print("del object")

obj = myclass("hello")

obj.show_data()

del obj

