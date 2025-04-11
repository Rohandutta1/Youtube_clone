
# 📺 YouTube Clone - Full Stack Video Sharing Platform

A complete **YouTube-like video streaming platform** built from scratch using **PHP**, **HTML/CSS**, **SQL**, and **AWS**. Upload videos, like, comment, subscribe — all in one sleek, functional clone.

---



## 🚀 Tech Stack

- 🧠 **Frontend**: HTML5, CSS3, JavaScript  
- 🛠️ **Backend**: PHP (Vanilla PHP, no frameworks)  
- 🗃️ **Database**: MySQL  
- ☁️ **Cloud Storage**: AWS S3 for storing video uploads  
- 🔐 **Authentication**: Session-based login/signup  
- 📡 **Server**: Apache or Nginx (LAMP stack setup recommended)

---

## ✨ Features

- 🎞️ Upload, stream, and delete videos  
- 👤 User login/signup with secure password hashing  
- ❤️ Like/Dislike videos  
- 💬 Comment system  
- 🔔 Subscribe to channels  
- 📁 Channel profiles with video listings  
- 🔍 Search bar to find videos  
- 🧠 Recommended videos sidebar  
- 📊 View count and engagement tracking  
- 🎨 Responsive design (mobile-friendly)

---

## 🖼️ Screenshots

![image](https://github.com/Rohandutta1/Youtube_clone/assets/136701369/bfc1a036-6c45-40b7-98c4-71b20ee922d1)
![image](https://github.com/Rohandutta1/Youtube_clone/assets/136701369/80e2c000-05d9-4245-8d9c-2e518287a96e)
![image](https://github.com/Rohandutta1/Youtube_clone/assets/136701369/9f5b1572-8451-40c6-ba83-bb50b6d3ce5a)
![image](https://github.com/Rohandutta1/Youtube_clone/assets/136701369/ce80548f-7c5f-42c3-a222-562a2fee2c19)


---
Create a new MySQL database (e.g., youtube_clone)

Import the provided SQL file:
Update config/db.php with your DB credentials.

3️⃣ Configure AWS S3
Create an S3 bucket for video uploads

Update AWS credentials in includes/aws_config.php

4️⃣ Run the Application
Make sure your server (Apache/Nginx) is running.

Place the project in your web server directory (e.g., htdocs for XAMPP).

Visit: http://localhost/youtube-clone

🔑 Admin Credentials (Demo Only)
Username: admin
Password: admin123
⚠️ Change or disable in production.

🎮 Controls (User Guide)
Feature	Action
Upload video	Click "Upload" in navbar after login
Watch video	Click any thumbnail
Like/Dislike	Use the thumbs up/down icons
Comment	Scroll below video and post a comment
Subscribe	Click "Subscribe" button on channel page
Search	Use search bar at the top
