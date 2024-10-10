<p align="center">
  <img src="https://img.icons8.com/?size=512&id=55494&format=png" width="20%" alt="KFU-CLUBS-logo">
</p>
<p align="center">
    <h1 align="center">KFU-CLUBS</h1>
</p>
<p align="center">
    <em>Where Seamless Navigation Meets Effortless Engagement! 🚀</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/Xor01/KFU-Clubs?style=flat&logo=opensourceinitiative&logoColor=white&color=e2192e" alt="license">
	<img src="https://img.shields.io/github/last-commit/Xor01/KFU-Clubs?style=flat&logo=git&logoColor=white&color=e2192e" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/Xor01/KFU-Clubs?style=flat&color=e2192e" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/Xor01/KFU-Clubs?style=flat&color=e2192e" alt="repo-language-count">
</p>
<p align="center">
		<em>Built with the tools and technologies:</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
</p>

<br>

#####  Table of Contents

- [ Overview](#-overview)
- [ Features](#-features)
- [ Repository Structure](#-repository-structure)
- [ Modules](#-modules)
- [ Getting Started](#-getting-started)
    - [ Prerequisites](#-prerequisites)
    - [ Installation](#-installation)
    - [ Usage](#-usage)
    - [ Tests](#-tests)
- [ Project Roadmap](#-project-roadmap)
- [ Contributing](#-contributing)
- [ License](#-license)
- [ Acknowledgments](#-acknowledgments)

---

##  Overview

KFU-Clubs is a versatile web application designed to streamline event management and user interaction within the KFU community. The project offers essential functionalities such as user account updates, event creation, viewing events, announcements display, password reset, and homepage rendering. Through a well-structured architecture, KFU-Clubs ensures a cohesive user experience by seamlessly integrating backend processes with frontend interfaces. By leveraging reusable components and consistent messaging, KFU-Clubs simplifies event management tasks, facilitates secure account modifications, and enhances overall user engagement. This projects value proposition lies in providing KFU community members with a centralized platform to efficiently create, view, and register for events while maintaining a user-friendly interface for managing their accounts and staying informed through announcements.

---

##  Features

|    |   Feature         | Description |
|----|-------------------|---------------------------------------------------------------|
| ⚙️  | **Architecture**  | The project follows a modular architecture with clear separation of frontend and backend components. It uses PHP for backend logic and templating. The codebase is organized with different files handling specific functionalities.  |
| 🔩 | **Code Quality**  | The codebase maintains a good level of quality with consistent coding style and proper commenting. It follows best practices for PHP development and includes error handling mechanisms.  |
| 📄 | **Documentation** | The project provides detailed inline documentation within the PHP files explaining the purpose and usage of various functions and components. However, a comprehensive external documentation could be beneficial for newcomers. |
| 🔌 | **Integrations**  | Dependencies include 'htaccess', 'sql', and 'php'. The project integrates backend processes seamlessly within the frontend structure to provide a cohesive user experience in managing clubs and events. |
| 🧩 | **Modularity**    | The codebase exhibits good modularity with clear separation of concerns among different functionalities. Components like user account management, event creation, and club management are self-contained and reusable. |
| 🧪 | **Testing**       | The project doesn't mention specific testing frameworks or tools used. Including automated testing tools like PHPUnit for PHP could enhance code reliability and maintainability. |
| ⚡️  | **Performance**   | The efficiency of the project depends on the server-side performance of the PHP scripts and the database queries. Optimizing code execution and database interactions could improve overall performance. Resource usage should be monitored for scalability. |
| 🛡️ | **Security**      | The project implements user authentication mechanisms for user account management and password reset. Additional security measures like input sanitization, data validation, and protection against SQL injection could enhance data protection. |
| 📦 | **Dependencies**  | Key dependencies include libraries for server-side scripting (PHP), database management (SQL), and server configuration (htaccess). Proper management and updating of these dependencies are crucial for the project's stability. |
| 🚀 | **Scalability**   | The project's scalability depends on the server's capacity to handle increased traffic and database load. Implementing caching mechanisms, optimizing database queries, and horizontal scaling can improve the project's scalability.

---

##  Repository Structure

```sh
└── KFU-Clubs/
    ├── README.md
    ├── announcements.php
    ├── app
    │   ├── .htaccess
    │   ├── backend
    │   ├── frontend
    │   └── setup
    ├── applicant_management.php
    ├── change_privileges.php
    ├── clubs.php
    ├── create_announcement.php
    ├── create_club.php
    ├── create_event.php
    ├── delete-account.php
    ├── event_applications.php
    ├── events.php
    ├── index.php
    ├── login.php
    ├── logout.php
    ├── profile.php
    ├── register.php
    ├── reset_password.php
    ├── send_club_request.php
    ├── start.php
    ├── test.php
    ├── update-account.php
    └── view_event.php
```

---

##  Modules

<details closed><summary>.</summary>

| File | Summary |
| --- | --- |
| [update-account.php](https://github.com/Xor01/KFU-Clubs/blob/main/update-account.php) | Manages user account updates through frontend interfaces, ensuring seamless navigation and consistent messaging. Supports backend processes to securely handle account modifications within the KFU-Clubs repository architecture. |
| [announcements.php](https://github.com/Xor01/KFU-Clubs/blob/main/announcements.php) | Displays announcements on the frontend using included templates. Familiar with the system structure, it leverages reusable components to render announcements seamlessly in the web application. |
| [create_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/create_event.php) | Manages event creation flow by integrating backend processes within the frontend structure. Displays messages, main dashboard, and event creation interface to users. Ensures cohesive user experience and efficient event management in the KFU Clubs web application. |
| [view_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/view_event.php) | Renders event details and facilitates event registration. Integrates frontend layout components and backend functionality for event registration handling. Enhances user experience within the KFU-Clubs repository by providing a seamless event viewing and registration process. |
| [reset_password.php](https://github.com/Xor01/KFU-Clubs/blob/main/reset_password.php) | Enables user password reset functionality by integrating backend and frontend components in the user authentication flow. Facilitates a seamless process for users to securely reset their passwords through the web application. |
| [index.php](https://github.com/Xor01/KFU-Clubs/blob/main/index.php) | Renders the homepage interface, integrating key frontend components from the parent repositorys frontend directory. Centralizes content display and user interaction through a cohesive layout of header, navbar, messages, and footer sections. |
| [register.php](https://github.com/Xor01/KFU-Clubs/blob/main/register.php) | Manages user registration process by incorporating necessary frontend and backend components. Handles user authentication and displays registration page. Integral part of user management within the club application system. |
| [profile.php](https://github.com/Xor01/KFU-Clubs/blob/main/profile.php) | Manages user profile display by integrating frontend and backend components. Coordinates authentication and profile data retrieval for a cohesive user experience within the KFU Clubs repositorys architecture. |
| [create_club.php](https://github.com/Xor01/KFU-Clubs/blob/main/create_club.php) | Enables club creation in the KFU-Clubs app. Orchestrates frontend layout, authentication, and club creation processes seamlessly. Facilitates users engagement and club management within the apps architecture. |
| [change_privileges.php](https://github.com/Xor01/KFU-Clubs/blob/main/change_privileges.php) | Manages user privileges and announcements, displaying user messages and a dashboard for privilege changes. |
| [start.php](https://github.com/Xor01/KFU-Clubs/blob/main/start.php) | Connects backend and frontend modules, setting up essential directory paths for seamless integration. Facilitates centralized configuration handling across the repository for efficient application operation. |
| [applicant_management.php](https://github.com/Xor01/KFU-Clubs/blob/main/applicant_management.php) | Manages club membership applications on the frontend and backend, ensuring a streamlined process for applicants and admins. Includes essential functions for viewing, managing, and responding to applications within the club management system. |
| [create_announcement.php](https://github.com/Xor01/KFU-Clubs/blob/main/create_announcement.php) | Enables creation and sending of announcements with frontend and backend integration. Facilitates dashboard interaction and announcement management within the KFU-Clubs web application. |
| [login.php](https://github.com/Xor01/KFU-Clubs/blob/main/login.php) | Handles user authentication and login functionality within the frontend architecture. Includes necessary components such as header, navbar, messages, and footer. Orchestrates the login process via the backend module. |
| [logout.php](https://github.com/Xor01/KFU-Clubs/blob/main/logout.php) | Enables user logout functionality by orchestrating redirection and clearing of session data, ensuring a secure and seamless user experience within the broader KFU-Clubs repository architecture. Integrates backend authorization and frontend messaging components for streamlined user interaction. |
| [event_applications.php](https://github.com/Xor01/KFU-Clubs/blob/main/event_applications.php) | Manages event applications display, leveraging the backend script for functionality. Includes key UI elements like headers, messages, and footers, ensuring a seamless user experience within the club management platform architecture. |
| [events.php](https://github.com/Xor01/KFU-Clubs/blob/main/events.php) | Manages event registration process within club platform, integrating backend registration functionality and displaying events page with header, navigation, messages, and footer components for a seamless user experience. |
| [test.php](https://github.com/Xor01/KFU-Clubs/blob/main/test.php) | Generates hashed passwords, hash values, and random tokens using helper functions. Incorporated within the club management system architecture. |
| [delete-account.php](https://github.com/Xor01/KFU-Clubs/blob/main/delete-account.php) | Executes the deletion of user accounts securely while displaying messages to the frontend. It integrates with the backend authentication system and leverages the frontend messaging components in the KFU-Clubs repository architecture. |
| [send_club_request.php](https://github.com/Xor01/KFU-Clubs/blob/main/send_club_request.php) | Handles club request submissions by integrating with the authentication backend. Initiates club request processing upon user action, enhancing user engagement and enabling seamless club management within the application architecture. |
| [clubs.php](https://github.com/Xor01/KFU-Clubs/blob/main/clubs.php) | Renders a cohesive interface for club management in the web application, ensuring consistent design and user experience. Orchestrates the layout and content elements to present club-related information effectively within the parent repositorys architecture. |

</details>

<details closed><summary>app</summary>

| File | Summary |
| --- | --- |
| [.htaccess](https://github.com/Xor01/KFU-Clubs/blob/main/app/.htaccess) | Enables secure access control and URL rewriting for the apps backend and frontend. Implements rules to enhance performance and protect sensitive data within the KFU-Clubs repository structure. |

</details>

<details closed><summary>app.backend.core</summary>

| File | Summary |
| --- | --- |
| [Database.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Database.php) | KFU-Clubs/app/backend/core/Database.phpThis code file serves as the core database handler for the KFU Clubs application, managing database connections and interactions. It encapsulates essential functionalities such as executing queries, handling errors, and storing results. Through a singleton pattern, it ensures a single instance of the database connection throughout the application, promoting efficiency and consistency in data operations. |
| [Init.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Init.php) | Initializes session and autoloads core dependencies for authentication, user management, announcements, clubs, events, security questions, and comments within the backend of the KFU Clubs platform. |
| [Cookie.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Cookie.php) | Manages cookies within the backend core. Determines cookie existence, retrieves cookie values, sets new cookies with expiration, and deletes cookies. Crucial for handling user sessions and preferences across club-related functionalities. |
| [Input.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Input.php) | Handles user input validation and retrieval for HTTP requests, crucial for ensuring data integrity and security in the club management system. |
| [Helpers.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Helpers.php) | Implements essential helper functions in backend. Escapes strings, autoloads classes dynamically, formats strings, and retrieves the application name. Facilitates clean code organization and class loading within the repository structure. |
| [Redirect.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Redirect.php) | Enables redirecting users to different pages within the KFU-Clubs web application. Handles various redirection scenarios, such as sending users to specific URLs or displaying a custom error page for HTTP 404 errors. Vital for managing user navigation seamlessly. |
| [Password.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Password.php) | Hash passwords, rehash existing ones, validate passwords against stored hashes, and retrieve password hashing information. |
| [Hash.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Hash.php) | Generates hashed values, salts for security, and unique hashes. Crucial for data encryption and user authentication within the KFU-Clubs architecture. |
| [Config.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Config.php) | Empowers access to configuration settings throughout the repository. Retrieves specific configuration values based on provided paths, ensuring modularity and simplicity in managing application configuration. Essential for maintaining consistent behavior across various functionalities. |
| [Session.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/core/Session.php) | Manages session data for user authentication and temporary messaging. Handles existence, creation, retrieval, and deletion of session variables. Facilitates flash messaging storage and retrieval. Crucial for maintaining user sessions and providing feedback in the KFU-Clubs web application. |

</details>

<details closed><summary>app.backend.classes</summary>

| File | Summary |
| --- | --- |
| [SecurityQuestion.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/SecurityQuestion.php) | Manages security questions by creating, finding, updating, and checking existence in the database. Abstraction layer for database interaction within the apps backend structure. |
| [User.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/User.php) | This `User.php` file within the `app/backend/classes` directory of the `KFU-Clubs` repository manages user authentication and session handling. It encapsulates functionality for user data storage, session management, and login status tracking. It interacts with the database via a Database class and utilizes session and cookie names defined in the configuration. The primary focus is on maintaining user login states and information within the application context. |
| [Token.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Token.php) | Generates and validates secure tokens for user authentication. Integrates with session management and hashing services following repositorys backend architecture. |
| [ClubsManagement.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/ClubsManagement.php) | This `ClubsManagement` class in `ClubsManagement.php` within the `KFU-Clubs` repository is essential for managing club-related data. It provides methods to update club information in the database. This file plays a crucial role in handling the backend functionality related to clubs within the application architecture. |
| [Club.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Club.php) | Manages club data, supports updating and creating clubs. Retrieves clubs from the database and checks permissions. Central component in managing club-related operations within the KFU Clubs app architecture. |
| [Validation.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Validation.php) | The `Validation.php` file within the `app/backend/classes` directory serves as a crucial component in the KFU-Clubs repositorys architecture. It provides a class, `Validation`, responsible for validating input data based on defined rules. The primary purpose of this code is to ensure data integrity by checking and processing input according to specified criteria. This validation functionality is essential for maintaining the quality and reliability of data handling throughout the application. |
| [Comment.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Comment.php) | The `Comment` class in the `KFU-Clubs` repositorys `app/backend` directory manages event comments by enabling updates and retrieval from the database. It centralizes database interactions for comments associated with events, offering methods for fetching all comments and updating specific comment records efficiently. This class acts as a crucial component in handling event-based interactions within the club management system, enhancing the platforms functionality for users to engage and interact around events seamlessly. |
| [Event.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Event.php) | The `Event.php` file within the `KFU-Clubs` repositorys `app/backend/classes` directory serves as a crucial component for managing events. This code file facilitates the creation of new events by interacting with the underlying database. By encapsulating operations related to event creation, this class plays a pivotal role in the overall functionality and organization of the club management system. |
| [Announcement.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/classes/Announcement.php) | Manages announcements by creating, retrieving, and updating data. Organizes data from the announcements table with methods for creation, retrieval, and updating. Crucial for managing and displaying club announcements in the application. |

</details>

<details closed><summary>app.backend.auth</summary>

| File | Summary |
| --- | --- |
| [user.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/user.php) | Manages user authentication and authorization in the backend of KFU-Clubs app. Integrates with Init.php for core functionality. |
| [update-account.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/update-account.php) | Manages user profile updates securely. Validates input fields, including name, email, password, and college info. Displays error messages when needed. Updates profile data and password based on user input. Displays success message on profile update. |
| [announcements.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/announcements.php) | Manages announcements functionality by instantiating the Announcement class. It plays a crucial role in the backend architecture of the KFU Clubs repository, facilitating announcement-related operations. |
| [config.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/config.php) | Manages global configuration settings for the app, including database credentials, password hashing parameters, and session details. Centralizes key values for consistent access and modification across the project. |
| [create_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/create_event.php) | Manages event creation permissions based on user roles, ensuring admin access to selected clubs. Validates event date formatting and prevents invalid time entries. Handles event creation and error handling, providing feedback for successful event publication or error resolution. |
| [dashboard.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/dashboard.php) | Authenticates dashboard access for logged-in users and checks admin privileges before rendering dynamic content. Imposes restrictions efficiently within the club management system to ensure seamless user experience and data security. |
| [clubManagement.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/clubManagement.php) | Manages club-related functionality through the `ClubsManagement` class, supporting club creation, event management, and user privileges within the KFU Clubs app repositorys backend architecture. |
| [reset_password.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/reset_password.php) | Validates user input, checks security questions for password reset, and updates password securely. Utilizes authentication and validation classes to ensure data integrity and user security within the applications backend structure. |
| [comment.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/comment.php) | Manages comment functionality through the instantiation of a Comment object. |
| [register.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/register.php) | Handles user registration process with validation checks and user creation. If logged in, redirects to the homepage. Validates input fields and encrypts passwords before user creation. Shows error messages if validation fails. Aids in facilitating user onboarding seamlessly. |
| [profile.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/profile.php) | Authenticates user session and retrieves user data for authorized access within the KFU-Clubs app. Essential for ensuring secure interactions and personalizing user experience. |
| [register_for_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/register_for_event.php) | This code file handles user registration for events within the KFU-Clubs platform. It ensures that only logged-in users can register for events by checking their authentication status. Users provide event, user, and club IDs to register for a specific event, with the registration process triggered by a register action. |
| [create_club.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/create_club.php) | Creates a new club if user is an admin, otherwise redirects. Handles club name and description input, creating club entry and assigning admin privileges to user. Displays success message or prompt to contact support if creation fails. |
| [change_privileges.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/change_privileges.php) | Enforces role-based access control management within club privileges. Validates and updates user permissions based on assigned roles, ensuring secure and authorized actions. Controls user access rights to maintain data integrity and enforce proper administrative permissions. |
| [send_announcement.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/send_announcement.php) | Enables authenticated admins to create announcements for their managed clubs, ensuring proper permissions and error handling. Facilitates efficient club management by filtering unauthorized access and providing a streamlined announcement creation process. |
| [applicant_management.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/applicant_management.php) | Manages club membership applications, allowing admins to accept or reject users. Verifies permissions before processing actions to ensure security. Supports seamless user interaction within the club system. |
| [login.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/login.php) | Handles user login authentication, validates input, and redirects users based on login success or failure. Ensures secure login process with CSRF token check, input validation, and flash messages. Promotes a seamless user experience on the KFU Clubs platform. |
| [logout.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/logout.php) | Enables users to log out securely from the KFU Clubs platform. Utilizes the backend authentication system to successfully log the user out and redirects them to the main index page. |
| [security_question.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/security_question.php) | Manages security questions for user authentication. Introduces a SecurityQuestion class for the repository. |
| [event_applications.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/event_applications.php) | Manages event applications, validating user permissions, and processing accept/reject actions while ensuring admin privileges. Handles user interactions with club events securely within the backend framework of the KFU Clubs repository. |
| [cookie.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/cookie.php) | Manages user authentication via cookies for seamless login experience in the platform. Validates cookie, retrieves user credentials, and initiates login if valid. Facilitates persistent session handling within the applications user management system. |
| [events.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/events.php) | Manages event-related functionality by initializing Event class for the backend. |
| [delete-account.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/delete-account.php) | Enables users to securely delete their accounts and automatically redirects to the main page. |
| [send_club_request.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/send_club_request.php) | Handles club membership requests, ensuring users are not already members. Adds users to clubs with pending status and notifies them. Redirects users accordingly. |
| [clubs.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/backend/auth/clubs.php) | Manages club-related functionality by initializing Club class using app/backend/core/Init.php within the KFU-Clubs repository structure. |

</details>

<details closed><summary>app.setup</summary>

| File | Summary |
| --- | --- |
| [current_sql_script.sql](https://github.com/Xor01/KFU-Clubs/blob/main/app/setup/current_sql_script.sql) | This code file `current_sql_script.sql` in the `KFU-Clubs` repository serves the critical function of providing the SQL dump for the database structure used by the application. By encapsulating the database schema in a structured SQL format, this file enables seamless setup and maintenance of the necessary database tables and relationships essential for the proper functioning of the club management system. |

</details>

<details closed><summary>app.frontend.pages</summary>

| File | Summary |
| --- | --- |
| [update-account.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/update-account.php) | Enables users to update their account information securely, including name, username, email, college, biography, and password. It ensures data integrity through form submission, enhancing user experience in managing their profiles within the KFU-Clubs architecture. |
| [announcements.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/announcements.php) | Displays club announcements with club name, title, creation date, and content. Organized in a visually appealing layout. Enhances user engagement and transparency within the platform. |
| [dashboard_main.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/dashboard_main.php) | Enables dashboard navigation for club management actions such as creating clubs, announcements, and events. Provides access control for admin privilege modifications. Supports applicant and event management within the KFU Clubs system. |
| [create_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/create_event.php) | Enables users to create events within clubs. Features include selecting club, specifying event details, and defining start/end times. Supports cancelling event creation. Enhances club management capabilities within the system. |
| [home.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/home.php) | Showcases club information and outcomes visually and descriptively on the home page of the frontend. Highlights club details like name and logo, along with brief descriptions. Enhances user experience by providing engaging content. |
| [view_event.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/view_event.php) | This code file `create_event.php` in the `KFU-Clubs` repository serves as a crucial component for adding new events to the clubs platform. It enables users to create and publish events associated with specific clubs within the application. This feature plays a vital role in enhancing user engagement and fostering community interaction within the platform. |
| [reset_password.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/reset_password.php) | Enabling users to reset their passwords securely, the page in app/frontend/pages/reset_password.php presents a form for entering a new password, answering a security question, and initiating the reset process within the KFU-Clubs repositorys user management system. |
| [register.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/register.php) | The `register.php` file in the `app/frontend/pages` directory of the KFU-Clubs repository facilitates user registration for the KFU Club platform. Upon accessing this page, users are prompted to create an account by providing their name. This user-friendly form simplifies the registration process and ensures a seamless onboarding experience for new users joining the platform. |
| [profile.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/profile.php) | Displays user profile information and provides actions like updating or deleting the account. Supports user interaction in managing personal data within the KFU-Clubs system. |
| [create_club.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/create_club.php) | Enables club creation with a user-friendly interface. Users can input club details and submit for creation, with an option to cancel. Facilitates seamless club management within the repositorys application framework. |
| [change_privileges.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/change_privileges.php) | The `change_privileges.php` file in the `KFU-Clubs` repository is a crucial component of the club management system. It enables administrators to modify user privileges within a selected club. Through a user-friendly interface, administrators can seamlessly navigate and adjust privileges, ensuring smooth club operations and efficient role management. |
| [applicant_management.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/applicant_management.php) | Displays and manages club applications for user review and action, facilitating the acceptance or rejection of membership requests. Displays user details and offers actions for each application, enhancing the users ability to efficiently manage club memberships. |
| [create_announcement.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/create_announcement.php) | Enables users to create announcements for specific clubs. Presents a form for title and content input, linking to respective club options. Facilitates creating announcements with required fields and cancel option. |
| [login.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/login.php) | Enables user authentication through a visually appealing login form. Allows users to sign in securely, providing essential access to the platform. Includes links for user registration and password reset, enhancing user experience and security. |
| [event_applications.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/event_applications.php) | Displays club event applications with user and event details, enabling acceptance or rejection actions. Features include dynamic rendering based on registration status and button functionality for decision-making. |
| [events.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/events.php) | Presents dynamic event details and registration options for users, handling registration status and display logic. Facilitates users view and interaction with event information within the frontend of the club management system. |
| [clubs.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/pages/clubs.php) | Showcases club information with join request functionality. Iterates through clubs data to display club details and provide a Request to join' option for non-members. Visualizes club name, creation date, description, and membership status for users. |

</details>

<details closed><summary>app.frontend.includes</summary>

| File | Summary |
| --- | --- |
| [messages.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/includes/messages.php) | Generates various message alerts for specific user actions like registration, login, updates, and general notifications. Enhances user experience by providing informative feedback. Integrates with the front-end to display success, informational, warning, and error messages across the application. |
| [header.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/includes/header.php) | Enhances frontend presentation by setting dynamic page title, responsive meta tags, and importing Bootstrap. Provides custom CSS and JS assets for a cohesive user interface in the KFU-Clubs web application. |
| [navbar.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/includes/navbar.php) | Enables user authentication and navigation, displaying relevant links based on user status. Provides access to clubs, announcements, events, and user profile, with admin-specific options. Enhances user experience through personalized content and streamlined interaction with the KFU-Clubs platform. |
| [footer.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/includes/footer.php) | Enhances UI consistency-Displays a standardized footer-Contributes to cohesive front-end design |

</details>

<details closed><summary>app.frontend.includes.errors</summary>

| File | Summary |
| --- | --- |
| [404.php](https://github.com/Xor01/KFU-Clubs/blob/main/app/frontend/includes/errors/404.php) | Returns a standard 404 error message for missing pages within the frontend section of the repository. |

</details>

---

##  Getting Started

###  Prerequisites

**PHP**: `version x.y.z`

###  Installation

Build the project from source:

1. Clone the KFU-Clubs repository:
```sh
❯ git clone https://github.com/Xor01/KFU-Clubs
```

2. Navigate to the project directory:
```sh
❯ cd KFU-Clubs
```

3. Install the required dependencies:
```sh
❯ composer install
```

###  Usage

To run the project, execute the following command:

```sh
❯ php main.php
```

###  Tests

Execute the test suite using the following command:

```sh
❯ vendor/bin/phpunit
```

##  Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Report Issues](https://github.com/Xor01/KFU-Clubs/issues)**: Submit bugs found or log feature requests for the `KFU-Clubs` project.
- **[Submit Pull Requests](https://github.com/Xor01/KFU-Clubs/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/Xor01/KFU-Clubs/discussions)**: Share your insights, provide feedback, or ask questions.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/Xor01/KFU-Clubs
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="left">
   <a href="https://github.com{/Xor01/KFU-Clubs/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=Xor01/KFU-Clubs">
   </a>
</p>
</details>

---

##  License

This project is protected under the GNU General Public License v3.0 License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/gpl-3.0/) file.

---

##  Acknowledgments

- [GitHub Repo](https://github.com/jandaryl/simple-php-boilerplate/)
```php
git clone https://github.com/jandaryl/simple-php-boilerplate.git
```

---
Note: you need to configer the /app/backend/auth/config.php file to your needs


There exist a dummy data in the /app/setup/current_sql_script.sql thta you can use 
