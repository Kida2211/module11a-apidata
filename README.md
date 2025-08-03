# Module 11A: API Data – Weather Forecast Viewer

This Laravel project reads a static JSON file representing weekly weather data and displays it in a styled Blade view.

## 📁 Features
- Reads `weather.json` from `storage/app`
- Parses and displays data in a table
- Highlights rainy days with a blue background
- Clean, simple Laravel structure (no frontend JS)

## 💻 Setup Instructions
1. Clone the repo
2. Run `composer install`
3. Run `php artisan serve`
4. Visit `http://127.0.0.1:8000/weather`

## 🌦 Sample Output
![Weather Table Screenshot](screenshot.png) <!-- You can add a screenshot named screenshot.png -->

## 📝 Notes
- No database required
- Uses Laravel’s Storage and Blade features
