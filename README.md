# PHP-HTMX-Capacitor Skeleton

This is a skeleton project designed to kickstart development of all-in-one applications (web and mobile) using **PHP**, **HTMX**, and **CapacitorJS**. The stack enables seamless server-side rendering with dynamic interactivity and mobile-friendly deployment.

---

## Features

- **PHP**: Backend server-side scripting.
- **HTMX**: Simplified frontend interactivity without the need for heavy JavaScript frameworks.
- **CapacitorJS**: Build and deploy mobile apps from your web application with minimal effort.
- Modular architecture to support both web and mobile platforms.
- Example configurations for local development and production environments.

---

## Installation

### Requirements
- **PHP** (8.0 or later)
- **Composer**
- **Node.js** (16.x or later) and **npm**
- **Capacitor CLI** (installed globally)
  ```bash
  npm install -g @capacitor/cli
  ```

---

### Step 1: Clone the Repository
```bash
git clone git@github.com:phtmx-com/all-in-one.git
cd php-htmx-capacitor-skeleton
```

### Step 2: Install PHP Dependencies
```bash
composer install
```

### Step 3: Install Node.js Dependencies
```bash
npm install
```

---

## Development

### Local Web Development
Start a local PHP server:
```bash
php -S localhost:8000 -t html
```

Access the application at [http://localhost:8000](http://localhost:8000).

### Capacitor Mobile Development
1. Initialize Capacitor:
   ```bash
   npx cap init
   ```

2. Build the web application:
   ```bash
   npm run build
   ```

3. Sync Capacitor with the built files:
   ```bash
   npx cap sync
   ```

4. Open your preferred platform:
    - For Android:
      ```bash
      npx cap open android
      ```
    - For iOS:
      ```bash
      npx cap open ios
      ```

---

## HTMX Usage

- HTMX is integrated to provide dynamic interactivity.
- Example snippets for fetching and rendering content dynamically:
  ```html
  <button hx-get="/api/data" hx-target="#result" hx-swap="innerHTML">
    Load Data
  </button>
  <div id="result"></div>
  ```

---

## Build and Deploy

### For Web:
1. Build assets:
   ```bash
   npm run build
   ```
2. Deploy the `public` directory to your web server.

### For Mobile:
1. Sync and build the mobile apps:
   ```bash
   npx cap sync
   npx cap build
   ```

2. Deploy the app via Android Studio or Xcode.

---

## Testing

Run PHPUnit tests:
```bash
vendor/bin/phpunit
```

---

## Contribution

1. Fork the repository.
2. Create a feature branch:
   ```bash
   git checkout -b feature/your-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add your feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/your-feature
   ```
5. Create a pull request.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
