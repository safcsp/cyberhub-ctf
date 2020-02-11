#!/usr/bin/env python


import socket

# import thread module
from _thread import *
import threading

print_lock = threading.Lock()

# thread function
def threaded(c):
    c.send(b"Who are you?\n")
    while True:
        data = c.recv(64)
        if data and data[0:4] == b"root":
            c.send(b"\nWell Hello!!\nhere's your flag: \n\nCYBERHUB{curi0sity_ki11s_ne7cat}\n\nBye!")
        else:
            c.send(b"Go Away! I don't know you.\n")
        c.close()
        return False

def Main():
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.bind(("0.0.0.0", 8888))
    s.listen(5)
    print("socket is listening")

    while True:
        c, addr = s.accept()
        c.settimeout(10)
        print('Connected to :', addr[0], ':', addr[1])
        start_new_thread(threaded, (c,))
    s.close()

if __name__ == '__main__':
    Main()

