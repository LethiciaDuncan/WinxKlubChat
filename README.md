# WinxKlubChat
# This is the script to create the database
create schema winxklubchat;

use winxklubchat;

CREATE TABLE if not exists Users (
    UserId INT NOT NULL AUTO_INCREMENT,
    UserName VARCHAR(50) DEFAULT NULL,
    Email VARCHAR(50) DEFAULT NULL,
    Password varchar(50) DEFAULT NULL,
    Bio varchar(250) DEFAULT NULL,
    PRIMARY KEY (UserId)
);

CREATE TABLE if not exists Chats (
    ChatId INT NOT NULL AUTO_INCREMENT,
    ChatName VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (ChatId)
);

CREATE TABLE if not exists Messages (
    MessageId INT NOT NULL AUTO_INCREMENT,
    Content VARCHAR(100) DEFAULT NULL,
    TimeStamp varchar(20) DEFAULT NULL,
    UserId INT NOT NULL,
    ChatId INT NOT NULL,
    PRIMARY KEY (MessageId),
    FOREIGN KEY (UserId) REFERENCES users(UserId),
    FOREIGN KEY (ChatId) REFERENCES Chats(ChatId)
);


CREATE TABLE if not exists Chats (
    ChatId INT NOT NULL AUTO_INCREMENT,
    ChatName VARCHAR(100) DEFAULT NULL,
    PRIMARY KEY (ChatId)
);

CREATE TABLE if not exists UserChats (
    UserChatsId INT NOT NULL AUTO_INCREMENT,
    UserId INT NOT NULL,
    ChatId INT NOT NULL,
    PRIMARY KEY (UserChatsId),
    FOREIGN KEY (UserId) REFERENCES users(UserId),
    FOREIGN KEY (ChatId) REFERENCES Chats(ChatId)
);

CREATE TABLE if not exists ChatMessages (
    ChatMessagesId INT NOT NULL AUTO_INCREMENT,
    MessageId INT NOT NULL,
    ChatId INT NOT NULL,
    PRIMARY KEY (ChatMessagesId),
    FOREIGN KEY (MessageId) REFERENCES messages(MessageId),
    FOREIGN KEY (ChatId) REFERENCES Chats(ChatId)
);
