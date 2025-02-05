# WordPress JWT Authentication

## 📌 Overview
This setup enables JWT authentication for WordPress, allowing external applications like Laravel to authenticate users securely.

## 🛠️ Installation
### 1. Install JWT Authentication Plugin
Install the required plugin via Composer:
```bash
composer require firebase/php-jwt
```
Or install manually via WP Admin:
- Go to **Plugins → Add New**
- Search for **"JWT Authentication for WP-API"**
- Install and activate

### 2. Configure `wp-config.php`
Add the following lines **before** `/* That's all, stop editing! */`:
```php
define('JWT_AUTH_SECRET_KEY', 'your-strong-secret-key');
define('JWT_AUTH_CORS_ENABLE', true);
```
Generate a secure key using:
```bash
openssl rand -hex 32
```

### 3. Enable CORS (For External Access)
#### **Apache (.htaccess)**
```apache
<IfModule mod_headers.c>
    Header Set Access-Control-Allow-Origin "*"
    Header Set Access-Control-Allow-Methods "POST, GET, OPTIONS, PUT, DELETE"
    Header Set Access-Control-Allow-Headers "Authorization, Content-Type"
</IfModule>
```
#### **Nginx**
```nginx
add_header 'Access-Control-Allow-Origin' '*';
add_header 'Access-Control-Allow-Methods' 'GET, POST, OPTIONS, DELETE, PUT';
add_header 'Access-Control-Allow-Headers' 'Authorization, Content-Type';
```

## 🔑 API Usage
### 1. Get JWT Token (Login)
**Endpoint:**
```http
POST http://your-site.test/wp-json/jwt-auth/v1/token
```
**Body (JSON):**
```json
{
    "username": "admin",
    "password": "password123"
}
```
**Expected Response:**
```json
{
    "token": "eyJ0eXA...",
    "user_email": "admin@example.com",
    "user_nicename": "admin",
    "user_display_name": "Administrator"
}
```

### 2. Validate Token
**Endpoint:**
```http
POST http://your-site.test/wp-json/jwt-auth/v1/token/validate
```
**Headers:**
```http
Authorization: Bearer YOUR_JWT_TOKEN
```
**Expected Response:**
```json
{
    "code": "jwt_auth_valid_token",
    "data": {
        "status": 200
    }
}
```

## ✅ Testing
- Use **Postman** or **cURL** to test the login endpoint.
- If you receive a **401 Unauthorized error**, ensure that your `.htaccess` or Nginx config allows CORS.

## 🚀 Next Steps
Once JWT authentication is working, integrate it with your Laravel application for user verification.

