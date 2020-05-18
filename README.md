# Smart-Pill-Box
Untimed ABSTRACT medicine administration can always show adverse effects on the health of the patients. The proposed system is designed to help these patients to take the required medicine in the right proportion at the right time. The basic ideology is integrating the principle of Alarm clock with Light based slot sensing on a normal pill box. An alternate to the light based sensing method using capacitive fields is also employed. To make it more state-of-the-art, it has a web interface on which someone can give inputs about medicine and proper time as prescrited. And someone can track the whole system through the smartphones and can be notified as the input has given. 

# Software Algorithm


The smart pill box is designed to assist the users who are generally in the age group of a 50+ who tends to forget their periodical medicinal intake. The software that governs the control message flow is designed on HTML, CSS 3, PhP and we have used bootstrap for web application. And we have used python programming to code raspberry Pi to perform functionally as the inputs stored in the database which is already filled by web application. The flowcharts given below explain the operations of the design under different conditions and their response.

From the general flowchart of operation given above in Figure 2 we realize the most optimum code that will
 resolve the complexity surrounding the project. With the detection of power, all the registers are cleared of the previous values and previously stored values are loaded from the ROM memory. The Real Time Clock within the ARM7 controller board is initialized. At first the mode of the system is checked. There are 3 basic modes for this system


1.	Set Time And Date

2.	Set Medicine Frequency And Alarm

3.	Display Mode

The Set Time and Date mode will enable the user to adjust the Time and Date of the display system according to his country’s standard time. Referring to Figure 3, we can see that inside two selection options are given to adjust the date and time independently. Within the date or the time option, we can increment the values by using a loop and check function.

The Set Medicine Frequency module is for enabling the user to set the frequency of the medicine in a day and also set the convenient time for the alarms during the course. The entry to this mode is similar to the Set Time and Date mode. Initially the number of the times or the


*all the programs, Web application codes and raspberry Pi codes attached bellow as:

Web files:                                  raspberry pi files:
bootstrap.php			    connect.py
home.php			    Pi_pill.py
login.php
logout.php
project_smart_pill_box.sql
redirect.php
s.php
smart_pill_box.php

 

