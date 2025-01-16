# Vue.js Authentication and CRUD Application

This is a Vue.js-based web application that demonstrates the use of authentication, CRUD operations, and state persistence using local storage, without relying on external APIs. The app includes features like dark/light mode, search/filter, pagination, and a user profile page.

## Features

- **Login / Authentication**: Users can log in with a static username and password, and their authentication status is persisted even after page reloads.
- **Profile Edit**: Users can edit their profile information (full name), and changes will be saved persistently.
- **CRUD Operations**: Simple CRUD functionality without an API. Data is stored in local storage or IndexedDB.
- **Search and Filter**: Users can search/filter data, and the search state is retained across page refreshes.
- **Pagination**: Implemented pagination for the CRUD data, allowing users to navigate through pages of data.
- **Dark Mode / Light Mode**: Users can toggle between light and dark modes. The app also follows the OS theme by default.
- **Responsive Design**: The application is responsive and works across devices like desktop, tablet, and mobile.

## Installation

1. Clone the repository

   ```bash
   git clone https://github.com/defrijay/fullstack-intern-test.git
   ```

2. Go into the folder

   ```bash
   cd fullstack-intern-test
   ```

3. Install NPM

   ```bash
   npm install
   ```

4. Run the NPM

   ```bash
   npm run dev
   ```

## Login
Login Using username and password in below

   ```bash
   username : admin
   password : password
   ```
