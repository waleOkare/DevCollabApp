# DevCollab — Patrick Okare (2016)

## 📌 Overview
DevCollab is a full-stack web application built to streamline team collaboration for computer science students during group projects. It unifies real-time messaging, collaborative code editing, file sharing, and video conferencing into a single, user-friendly platform.

## ☁️ Hosting & Infrastructure
Deployed on Microsoft Azure, DevCollab uses a cloud-based architecture with MySQL as the backend database and Adminer for schema visualization and management.

## Web App - URL
karetechapp.azurewebsites.net

## 🛠️ Tech Stack
- **Frontend:** HTML5, jQuery, Ajax, Bootstrap
- **Backend:** PHP, MySQL (Azure-hosted)
- **Code Editor:** CodeMirror (JavaScript)
- **Real-Time Messaging:** AJAX and jQuery
- **File Sharing:** Secure file upload & download interface
- **Video Conferencing:** WebRTC-powered, built using native JS APIs

## 🚀 Key Features
- **Collaborative Code Editor:** Real-time editing using CodeMirror
- **Instant Messaging:** AJAX-powered chat interface
- **File Sharing:** Drag-and-drop interface for team resource exchange
- **Video Calls:** Peer-to-peer video chat using WebRTC

## 📦 Folder Structure

<pre><code>
devcollab/
├── .idea/                   # Project workspace settings (JetBrains IDE)
├── codemirror/              # Core CodeMirror files for the code editor
├── css/                     # Custom stylesheets and Bootstrap CSS
├── fonts/                   # Fonts used across the app
├── hint/                    # CodeMirror hint functionality
├── js/                      # JavaScript files (jQuery, chat, AJAX)
├── lib/                     # CodeMirror libraries and dependencies
├── mode/                    # CodeMirror language modes (e.g., JavaScript, PHP)
├── phpFileTree/             # File directory interface for uploads
├── theme/                   # CodeMirror theme configurations
├── Abruptly_Goblins_Planner.ipynb   # Notebook (likely unrelated/dev notes)
├── adminer.php              # Adminer DB interface for MySQL
├── ajax.php                 # AJAX backend handler
├── chat.css                 # Styles specific to chat UI
├── codeEditor.php           # CodeMirror-based collaborative editor
├── connection.php           # DB connection config
├── contact.php              # Contact form
├── default.js               # Main JavaScript functions
├── egiser.php               # Registration (likely old name of register.php)
├── features.php             # Feature explanation/landing page
├── fileSharing.php          # Backend logic for file upload
├── geoplugin.class.php      # Geolocation plugin class
├── Geolocate.php            # PHP script for geolocation
├── google*.html             # Google site verification file
├── Home.php                 # Main homepage UI
├── index.php                # Entry point (login/landing)
├── insert.php               # DB insert logic
├── login.php                # Login handler
├── logout.php               # Logout script
├── logs.php                 # Message logs or activity logs
├── readUploadFile.php       # Read uploaded file content
├── readUserCodes.php        # Load code content for users
├── session.php              # PHP session controller
├── style.css                # Global stylesheet
├── success.php              # Post-login redirection
├── videoConf.php            # WebRTC video conferencing page
├── _config.yml              # Jekyll theme configuration for GitHub Pages
├── README.md                # Project overview and setup instructions
└── .htaccess                # Apache configuration for file uploads
</code></pre>

## 💡 Project Vision
The project was designed for educational collaboration, but the modular structure makes it extensible to open-source learning environments, coding bootcamps, or remote dev teams.

## 📖 License
[MIT](LICENSE)

---

