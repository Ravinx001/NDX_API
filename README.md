<div align="center">
  <h1>🇱🇰 NDX API - Sri Lankan Geographic Data Hub</h1>
  
  ### 🌐 Comprehensive Geographic and Institutional Data API for Sri Lanka
  
  **By Ravindu Amarasekara**  
  *Complete Geographic Information System for Sri Lankan Administrative and Institutional Data*
  
  ![GitHub repo size](https://img.shields.io/github/repo-size/Ravinx001/NDX_API?style=for-the-badge)
  ![GitHub stars](https://img.shields.io/github/stars/Ravinx001/NDX_API?style=for-the-badge)
  ![GitHub forks](https://img.shields.io/github/forks/Ravinx001/NDX_API?style=for-the-badge)
  ![GitHub issues](https://img.shields.io/github/issues/Ravinx001/NDX_API?style=for-the-badge)
  ![Laravel](https://img.shields.io/badge/Laravel-11.x-red?style=for-the-badge&logo=laravel)
  ![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
  ![API](https://img.shields.io/badge/API-REST-00d09c?style=for-the-badge)

</div>

---

## 🎯 Project Overview

**NDX API** is a comprehensive RESTful API providing detailed geographic and institutional data for Sri Lanka. Built with Laravel 11.x, this API serves as a centralized hub for accessing information about provinces, districts, cities, hospitals, pharmacies, police stations, postal codes, and administrative divisions across the beautiful island nation of Sri Lanka.

Whether you're building a location-based application, conducting research, developing emergency services, or creating educational tools, NDX API provides accurate, up-to-date, and well-structured data to power your projects.

---

## ✨ Key Features & Benefits

### 🗺️ **Complete Geographic Coverage**
- **9 Provinces** with multilingual support (English, Sinhala, Tamil)
- **25 Districts** with administrative codes and relationships
- **300+ Cities** with precise latitude/longitude coordinates
- **14,000+ Grama Niladhari Divisions** for granular location data

### 🏥 **Comprehensive Institutional Data**
- **1,000+ Hospitals** (Government & Private) with services and bed capacity
- **2,500+ Pharmacies** with operating hours and 24/7 availability
- **400+ Police Stations** with contact information and coverage areas
- **3,000+ Postal Codes** with area mappings
- **300+ Pradeshiya Sabhas** (Local Government Councils)

### 🚀 **Developer-Friendly Features**
- **RESTful Architecture** with intuitive endpoints
- **Advanced Filtering** by location, type, and relationships
- **Pagination Support** for large datasets
- **Relationship Loading** with eager loading capabilities
- **OpenAPI 3.1 Documentation** with interactive testing
- **Consistent JSON Responses** across all endpoints

### 🔒 **Production-Ready**
- Built on Laravel 11.x framework
- Database-driven with optimized queries
- Scalable architecture
- Comprehensive error handling
- API documentation with Scramble

---

## 🌏 Geographic Structure

<div align="center">

```
🇱🇰 Sri Lanka
├── 🏛️ 9 Provinces
│   ├── 🏢 25 Districts
│   │   ├── 🌆 300+ Cities
│   │   │   ├── 🏥 Hospitals
│   │   │   ├── 💊 Pharmacies
│   │   │   ├── 🚔 Police Stations
│   │   │   └── 📮 Postal Codes
│   │   ├── 🏘️ Grama Niladhari Divisions
│   │   └── 🏛️ Pradeshiya Sabhas
```

</div>

---

## 🛠️ Technology Stack

<div align="center">

| **Category** | **Technologies** |
|--------------|------------------|
| **Framework** | Laravel 11.x, PHP 8.2+ |
| **Database** | SQLite (Development), MySQL/PostgreSQL (Production) |
| **API Documentation** | Scramble (OpenAPI 3.1) |
| **Architecture** | RESTful API, Resource Controllers |
| **Testing** | PHPUnit, Feature & Unit Tests |
| **Development Tools** | Artisan CLI, Eloquent ORM, Migration System |

</div>

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Laravel 11.x
- SQLite/MySQL/PostgreSQL
- Web server (Apache/Nginx) or Laravel Valet

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Ravinx001/NDX_API.git
   cd NDX_API
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. **Access the API**
   - API Base URL: `http://localhost:8000/api/v1`
   - Documentation: `http://localhost:8000/docs/api`

---

## 📚 API Endpoints

### 🏛️ Administrative Divisions

#### Provinces
```http
GET /api/v1/provinces              # Get all provinces
GET /api/v1/provinces/{id}         # Get specific province
```

#### Districts
```http
GET /api/v1/districts              # Get all districts
GET /api/v1/districts/{id}         # Get specific district
```

#### Cities
```http
GET /api/v1/cities                 # Get all cities
GET /api/v1/cities/{id}            # Get specific city
```

#### Grama Niladhari Divisions
```http
GET /api/v1/grama-niladhari        # Get all GN divisions
GET /api/v1/grama-niladhari/{id}   # Get specific GN division
```

#### Postal Codes
```http
GET /api/v1/postal-codes           # Get all postal codes
GET /api/v1/postal-codes/{id}      # Get specific postal code
```

#### Pradeshiya Sabhas
```http
GET /api/v1/pradeshiya-sabas       # Get all Pradeshiya Sabhas
GET /api/v1/pradeshiya-sabas/{id}  # Get specific Pradeshiya Sabha
```

### 🏥 Institutions

#### Hospitals
```http
GET /api/v1/hospitals              # Get all hospitals
GET /api/v1/hospitals/{id}         # Get specific hospital
```

#### Pharmacies
```http
GET /api/v1/pharmacies             # Get all pharmacies
GET /api/v1/pharmacies/{id}        # Get specific pharmacy
```

#### Police Stations
```http
GET /api/v1/police-stations        # Get all police stations
GET /api/v1/police-stations/{id}   # Get specific police station
```

### 🔍 Advanced Query Examples

```bash
# Get hospitals in a specific city
GET /api/v1/hospitals?city_id=1

# Filter hospitals by type
GET /api/v1/hospitals?type=government

# Get cities in a district with province data
GET /api/v1/cities?district_id=1&include=district.province

# Get districts in a province with cities count
GET /api/v1/districts?province_id=1&with_counts=true

# Paginated results
GET /api/v1/cities?per_page=25&page=2

# Multiple filters
GET /api/v1/pharmacies?city_id=1&type=private&is_24_hours=1
```

---

## 📊 Data Models

### 🏛️ Province
```json
{
  "id": 1,
  "name_en": "Western Province",
  "name_si": "බස්නාහිර පළාත",
  "name_ta": "மேல் மாகாணம்",
  "code": "WP",
  "created_at": "2025-01-01T00:00:00.000000Z",
  "updated_at": "2025-01-01T00:00:00.000000Z"
}
```

### 🌆 City
```json
{
  "id": 1,
  "name_en": "Colombo",
  "name_si": "කොළඹ",
  "name_ta": "கொழும்பு",
  "latitude": "6.9271",
  "longitude": "79.8612",
  "district_id": 1,
  "created_at": "2025-01-01T00:00:00.000000Z",
  "updated_at": "2025-01-01T00:00:00.000000Z"
}
```

### 🏥 Hospital
```json
{
  "id": 1,
  "name": "National Hospital of Sri Lanka",
  "type": "government",
  "address": "Regent Street, Colombo 07",
  "phone": "+94112691111",
  "services": ["Emergency", "Surgery", "Cardiology"],
  "bed_count": 3500,
  "latitude": "6.9167",
  "longitude": "79.8583",
  "city_id": 1,
  "created_at": "2025-01-01T00:00:00.000000Z",
  "updated_at": "2025-01-01T00:00:00.000000Z"
}
```

### 💊 Pharmacy
```json
{
  "id": 1,
  "name": "OSUWA Pharmacy",
  "type": "government",
  "address": "Hospital Premises",
  "phone": "+94112345678",
  "opening_time": "08:00",
  "closing_time": "20:00",
  "is_24_hours": 0,
  "latitude": "6.9167",
  "longitude": "79.8583",
  "city_id": 1,
  "created_at": "2025-01-01T00:00:00.000000Z",
  "updated_at": "2025-01-01T00:00:00.000000Z"
}
```

---

## 📝 Usage Examples

### JavaScript/Fetch API
```javascript
// Get all provinces
const provinces = await fetch('http://localhost:8000/api/v1/provinces')
  .then(response => response.json());

// Get hospitals in Colombo
const colomboHospitals = await fetch('http://localhost:8000/api/v1/hospitals?city_id=1')
  .then(response => response.json());

// Get 24/7 pharmacies
const emergencyPharmacies = await fetch('http://localhost:8000/api/v1/pharmacies?is_24_hours=1')
  .then(response => response.json());
```

### PHP/cURL
```php
// Get all districts in Western Province
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost:8000/api/v1/districts?province_id=1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Content-Type: application/json"
    ]
]);
$response = curl_exec($curl);
$data = json_decode($response, true);
curl_close($curl);
```

### Python/Requests
```python
import requests

# Get all cities with district and province data
response = requests.get(
    'http://localhost:8000/api/v1/cities',
    params={'include': 'district.province'}
)
cities = response.json()

# Get government hospitals
response = requests.get(
    'http://localhost:8000/api/v1/hospitals',
    params={'type': 'government'}
)
hospitals = response.json()
```

---

## 🧪 Testing the API

### Using PowerShell (Windows)
```powershell
# Test basic endpoints
Invoke-RestMethod -Uri "http://localhost:8000/api/v1/provinces" -Method GET
Invoke-RestMethod -Uri "http://localhost:8000/api/v1/hospitals?type=government" -Method GET

# Test with filters
$response = Invoke-RestMethod -Uri "http://localhost:8000/api/v1/cities?district_id=1" -Method GET
$response.data | Format-Table
```

### Using cURL
```bash
# Basic requests
curl -X GET "http://localhost:8000/api/v1/provinces" -H "Accept: application/json"
curl -X GET "http://localhost:8000/api/v1/hospitals?city_id=1" -H "Accept: application/json"

# With pretty printing
curl -X GET "http://localhost:8000/api/v1/districts" -H "Accept: application/json" | jq
```

---

## 📁 Project Structure

```
NDX_API/
├── 🚀 app/
│   ├── Http/Controllers/       # API Controllers
│   │   ├── CityController.php
│   │   ├── DistrictController.php
│   │   ├── HospitalController.php
│   │   └── ...
│   ├── Models/                 # Eloquent Models
│   │   ├── City.php
│   │   ├── District.php
│   │   ├── Hospital.php
│   │   └── ...
│   └── Providers/
├── 🗃️ database/
│   ├── migrations/             # Database schema
│   ├── seeders/               # Data seeders
│   └── database.sqlite        # SQLite database
├── 🛣️ routes/
│   └── api.php                # API routes definition
├── ⚙️ config/
├── 🧪 tests/
│   ├── Feature/               # Feature tests
│   └── Unit/                  # Unit tests
├── 📚 docs/                   # API documentation
├── 🔧 composer.json
├── 🔧 artisan                 # Laravel CLI tool
└── 📖 README.md
```

---

## 🌟 Use Cases

### 🚑 Emergency Services
- Find nearest hospitals and pharmacies
- Locate police stations by area
- Get contact information for emergency response

### 📱 Mobile Applications
- Location-based services
- Navigation and mapping applications
- Delivery and logistics platforms

### 🏛️ Government & Research
- Administrative planning and analysis
- Demographic studies
- Resource allocation planning

### 🏢 Business Applications
- Branch location planning
- Market analysis
- Service area determination

### 🎓 Educational Projects
- Geographic information systems
- Data visualization projects
- API integration tutorials

---

## 📊 API Statistics

<div align="center">

| **Data Type** | **Count** | **Coverage** |
|--------------|-----------|--------------|
| **Provinces** | 9 | 100% of Sri Lanka |
| **Districts** | 25 | All administrative districts |
| **Cities** | 300+ | Major cities and towns |
| **Hospitals** | 1,000+ | Government & Private |
| **Pharmacies** | 2,500+ | Including 24/7 services |
| **Police Stations** | 400+ | National coverage |
| **Postal Codes** | 3,000+ | Complete postal system |
| **GN Divisions** | 14,000+ | Granular administrative units |

</div>

---

## 🔧 Development Commands

```bash
# Database operations
php artisan migrate                    # Run migrations
php artisan db:seed                   # Seed database
php artisan migrate:fresh --seed     # Fresh migration with seeding

# API documentation
php artisan scramble:export          # Export OpenAPI documentation

# Testing
php artisan test                     # Run all tests
php artisan test --filter=Hospital  # Run specific tests

# Cache operations
php artisan config:cache             # Cache configuration
php artisan route:cache              # Cache routes
php artisan optimize                 # Optimize application
```

---

## 📖 API Documentation

### Interactive Documentation
Visit `http://localhost:8000/docs/api` for interactive API documentation powered by Scramble.

### OpenAPI Specification
The complete OpenAPI 3.1 specification is available at:
- JSON: `http://localhost:8000/docs/api.json`
- YAML: `http://localhost:8000/docs/api.yaml`

### Postman Collection
Import the OpenAPI specification into Postman for easy testing and exploration.

---

## 🤝 Contributing

We welcome contributions! Here's how you can help:

### Adding New Data
1. Create new migration files for additional data types
2. Add corresponding seeders with accurate data
3. Create model relationships
4. Add API endpoints and controllers

### Improving the API
1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/NewEndpoint`)
3. Commit your Changes (`git commit -m 'Add new endpoint for XYZ'`)
4. Push to the Branch (`git push origin feature/NewEndpoint`)
5. Open a Pull Request

### Data Quality
- Ensure data accuracy and completeness
- Add multilingual support (Sinhala, Tamil, English)
- Include proper geographic coordinates
- Verify institutional information

---

## 📄 License

This project is licensed under the Apache License 2.0 - see the [LICENSE](./LICENSE) file for details.

---

## 🙏 Acknowledgments

- **Government of Sri Lanka** - For administrative division data
- **Department of Census and Statistics** - Population and geographic data
- **Ministry of Health** - Hospital and healthcare facility information
- **Sri Lanka Police** - Police station directory
- **Department of Posts** - Postal code information
- **Laravel Community** - For the excellent framework

---

## 📞 Contact & Support

**Ravindu Amarasekara**  
📧 Email: [rav.business.lak@gmail.com]  
🐙 GitHub: [@Ravinx001](https://github.com/Ravinx001)  
💼 LinkedIn: [https://www.linkedin.com/in/ravindu-amarasekara/]

### Getting Help
- 📚 Check the [API Documentation](http://localhost:8000/docs/api)
- 🐛 Report bugs via [GitHub Issues](https://github.com/Ravinx001/NDX_API/issues)
- 💬 Join discussions in [GitHub Discussions](https://github.com/Ravinx001/NDX_API/discussions)

---

## 🔮 Roadmap

### 🚀 Upcoming Features
- [ ] **GraphQL API** - Alternative query interface
- [ ] **Rate Limiting** - API usage control
- [ ] **Authentication** - API key management
- [ ] **Real-time Data** - WebSocket support for live updates
- [ ] **Geocoding API** - Address to coordinates conversion
- [ ] **Route Planning** - Distance and direction calculations
- [ ] **Data Export** - CSV, Excel, and JSON exports
- [ ] **Webhook Support** - Event-driven notifications

### 📈 Performance Improvements
- [ ] **Redis Caching** - Improved response times
- [ ] **Database Optimization** - Query performance tuning
- [ ] **CDN Integration** - Global content delivery
- [ ] **API Versioning** - Backward compatibility

---

<div align="center">
  
  ### 🌟 **Empowering Sri Lankan Digital Innovation** 🌟
  ### 🇱🇰 **One API at a Time** 🇱🇰
  
  ⭐ **Star this repository if you found it helpful!** ⭐
  
  ![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2FRavinx001%2FNDX_API&label=Visitors&countColor=%23263759&style=plastic)
  
</div>
