# crime_shield
E-FIR portal

# Crime Shield

Crime Shield is an online FIR management system that allows users to file First Information Reports (FIR) anonymously while ensuring accuracy and authenticity in reports. The platform also features a user-friendly admin portal for law enforcement officers to manage cases, assign officers, update case statuses, and delete reports when necessary.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup and Installation](#setup-and-installation)
- [Usage](#usage)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Project Overview

Crime Shield is a comprehensive platform built to digitize and streamline the process of filing, managing, and updating criminal complaints. The project includes:
- An anonymous FIR filing portal with mechanisms to prevent misuse.
- An admin dashboard where officials can view, update, and assign cases.
- AI-powered chatbot for real-time support during case filings.
- Google Maps integration to locate nearby police stations and detect users' current locations.

## Features

- **Anonymous Reporting**: Users can file reports anonymously without revealing their identity.
- **FIR Management**: Admins can assign cases to officers, update case statuses, and delete cases if necessary.
- **AI Chatbot**: Integrated chatbot for real-time user support during the case-filing process.
- **IP Tracking**: Limits to 2 complaints per day from the same IP address to reduce false reporting.
- **Google Maps Integration**: Detects user's location and shows the nearest police stations for assistance.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP
- **Database**: MySQL
- **AI Chatbot**: Integrated AI-powered chatbot for real-time support
- **Google Maps API**: For location-based services
- **Version Control**: Git, GitHub

## Setup and Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/crime_shield.git
    cd crime_shield
    ```

2. **Setup Database:**
   - Import the `crime_shield.sql` file into MySQL to set up the necessary database tables.
   - Update the `connection.php` file with your database credentials.

3. **Run the application:**
   - Use [XAMPP](https://www.apachefriends.org/index.html) or any local server to run the project.
   - Place the project folder inside the `htdocs` directory of XAMPP and start `Apache` and `MySQL` in the XAMPP control panel.
   - Access the app via `localhost/crime_shield`.

4. **Configure Google Maps API**:
   - Obtain a Google Maps API key and add it to the `index.html` file.

## Usage

1. **Anonymous Reporting**:
   - Navigate to the **Anonymous** page to file an anonymous FIR.
   - You can attach any proof or evidence (optional).

2. **Admin Portal**:
   - Login as an admin using the credentials stored in the backend (`ologin.php`).
   - Assign, update, or delete cases via the dashboard.

3. **AI Chatbot**:
   - Use the chatbot during the FIR filing process to get instant support or guidance.

4. **Google Maps**:
   - View your current location and locate the nearest police stations directly from the portal.

## Database Schema

The system uses MySQL to manage data, with key tables including:

- **users**: Stores user data including login credentials for admin.
- **fir_reports**: Stores FIR details submitted by users.
- **officers**: Stores data of police officers to whom FIRs can be assigned.
- **case_status**: Tracks the status of ongoing, open, or closed cases.


## Contributing

1. Fork the repository.
2. Create a new branch: 
   ```bash
   git checkout -b feature-branch-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m 'Add some feature'
   ```
4. Push the changes:
   ```bash
   git push origin feature-branch-name
   ```
5. Submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

If you have any questions or issues regarding this project, feel free to contact:

- **Name**: Jasika Gupta
- **Email**: jasikagupta2004@gmail.com
- **GitHub**: [yourusername](https://github.com/jasikagupta)


