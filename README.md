# Vehicle Rental Website

## Project Description and Overview

The Vehicle Rental Website is a feature-rich web application developed using **Laravel** and **Firebase**. This website allows users to rent a variety of vehicles for inter-city and outer-city travel, providing a seamless and user-friendly experience. The application features a high-quality UI design with intuitive navigation, ensuring ease of use for users of all backgrounds.

### Key Features

1. **User Authentication**
   - Secure sign-up and login functionality.
   - Password recovery ("Forgot Password") for seamless account recovery.

2. **User Information Management**
   - Personal information storage and management.
   - User profile section to view and update details.

3. **Reservation System**
   - Easy booking for vehicles with reservation records.
   - Sections for **Accepted Reservations**, **Declined Reservations**, and pending requests.

4. **Navigation System**
   - User-friendly navigation bar for quick access to website features.

5. **Firebase Integration**
   - Firebase Authentication for secure user verification.
   - Firebase Realtime Database for storing user information, reservations, and vehicle details.

### Technologies Used

- **Frontend**: Laravel Blade Templates (HTML, CSS, Bootstrap, JavaScript)
- **Backend**: Laravel (PHP)
- **Database**: Firebase Authentication, Firebase Realtime Database
- **UI/UX**: Modern and responsive design principles for an engaging user experience

### Use Cases

- Users can hire vehicles for personal or business use, choosing between inter-city or outer-city trips.
- Users can view and manage their reservation records, track accepted or declined requests, and receive updates.

## Installation

Clone this repository to your local machine:

```bash
https://github.com/Elin-powS/Vehicle_Rental_Website.git
```




### Set Up the Project

1. Install dependencies:
      ```bash
      composer install
      npm install
      ```
2. Configure Firebase:
  i) Add your google-services.json file to the project root.
  ii) Set up Firebase Authentication and Realtime Database in your Firebase console.

3. Configure environment variables:
  i) Update your .env file with the Firebase credentials and app configurations.

4. Run Migrations :
 ```bash
php artisan migrate
```    
5. Serve the application:
 ```bash
php artisan serve
```  
6. Access the website at http://127.0.0.1:8000 in your browser.


## Prerequisites

- PHP (8.0 or higher)
- Laravel (latest version)
- Composer installed on your machine
- Firebase project with Authentication and Realtime Database enabled

## How to Use

### Sign Up or Log In:
- Create a new account or log in using your existing credentials.

### Browse Vehicles:
- Choose the type of vehicle you want to rent for inter-city or outer-city travel.

### Make a Reservation:
- Book your desired vehicle and check the reservation status in the app.

### Manage Your Profile:
- Update your personal information in the profile section.

## Screenshots

<div style="display: flex; flex-wrap: wrap; gap: 10px;">
  <img src="images/splash_screen.jpg" alt="Splash Screen" style="width: 30%;">
  <img src="images/login.jpg" alt="Login" style="width: 30%;">
  <img src="images/sign_up.jpg" alt="Sign Up" style="width: 30%;">
  <img src="images/forget_password.jpg" alt="Forget Password" style="width: 30%;">
  <img src="images/mainactivity.jpg" alt="Main Activity" style="width: 30%;">
  <img src="images/nav.jpg" alt="Navigation" style="width: 30%;">
  <img src="images/user_profile.jpg" alt="User Profile" style="width: 30%;">
  <img src="images/edit_profile.jpg" alt="Edit Profile" style="width: 30%;">
  <img src="images/reservation.jpg" alt="Reservation" style="width: 30%;">
    <img src="images/fare.jpg" alt="Fare" style="width: 30%;">
  <img src="images/Accepted_reservation.jpg" alt="Accepted Reservation" style="width: 30%;">
   <img src="images/Decline_reservation.jpg" alt="Decline Reservation" style="width: 30%;">
  <img src="images/admin.jpg" alt="Admin" style="width: 30%;">
  <img src="images/user_admin.jpg" alt="User Admin" style="width: 30%;">
  <img src="images/reservation_rec.jpg" alt="Reservation Record" style="width: 30%;">
   <img src="images/A_or_D.jpg" alt="Accept or Decline" style="width: 30%;">
   <img src="images/pending.jpg" alt="Pending" style="width: 30%;">
  
</div>

## Future Enhancements

- Add payment gateway integration for online payments.
- Implement push notifications for reservation updates.
- Introduce vehicle tracking using GPS.

## License

This project is licensed under the MIT License - see the LICENSE file for details

## Contact

For any queries or contributions, please contact:

**Developer:** Aciful Islam Khan   
**Email:** sopnil493@gmail.com 
**GitHub:**  https://github.com/Elin-powS

Thank you for using the Car Rental App! Enjoy a seamless vehicle booking experience.
