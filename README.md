<h1 align="center">💼 Job Box Application</h1>

<p align="center">
  <strong>A Modern, Full-Featured Laravel Job Portal Application</strong><br>
  Post jobs, manage candidates, receive applications, handle employer dashboards — all in one powerful recruitment system.
</p>

<p align="center">
  <a><img src="https://img.shields.io/badge/Build-Passing-brightgreen" alt="Build Status"></a>
  <a><img src="https://img.shields.io/badge/Laravel-12.x-ff2d20?logo=laravel" alt="Laravel Version"></a>
  <a><img src="https://img.shields.io/github/license/BKOLPO-Technologies/job-box?color=green" alt="License"></a>
  <a><img src="https://img.shields.io/github/stars/BKOLPO-Technologies/job-box?style=social" alt="GitHub Stars"></a>
</p>

<hr>

<h2>📌 About Job Box Application</h2>

<p>
The <strong>Job Box Application</strong> is a complete job portal system built with <strong>Laravel</strong>.
It is designed for companies, recruiters, job seekers, HR departments and job listing platforms like <strong>BDJobs, Chakri.com, LinkedIn Jobs</strong> etc.
</p>

<p><strong>Main Goals:</strong></p>
<ul>
  <li>Provide smart job search & advanced filtering for candidates.</li>
  <li>Offer powerful employer dashboard for managing job posts & applicants.</li>
  <li>Ensure clean, scalable architecture following Laravel best practices.</li>
</ul>

<hr>

<h2>🎯 Core Features</h2>

<ul>
  <li>✔️ Job postings with full descriptions, responsibilities & requirements</li>
  <li>✔️ Job categories, industries & skill-based filtering</li>
  <li>✔️ Candidate registration with profile, resume/CV upload</li>
  <li>✔️ Employer/Company registration with company profile</li>
  <li>✔️ Employer Dashboard: manage jobs, view applicants</li>
  <li>✔️ Candidate Dashboard: applied jobs, saved jobs, profile update</li>
  <li>✔️ Job Application System with CV attachment</li>
  <li>✔️ Advanced job search (location, type, salary range, experience)</li>
  <li>✔️ Saved Jobs / Favourite Jobs</li>
  <li>✔️ Apply job via CV or profile</li>
  <li>✔️ Role & permission system (Admin, Employer, Candidate)</li>
  <li>✔️ Admin Management: jobs, candidates, employers, categories</li>
  <li>✔️ Email notifications (job applications, new job posts)</li>
  <li>✔️ SEO friendly URLs & meta data</li>
  <li>✔️ Fully responsive UI (mobile/tablet/desktop)</li>
</ul>

<hr>

<h2>🧪 Tech Stack & Tools</h2>

<ul>
  <li><strong>Backend:</strong> Laravel (PHP 8+)</li>
  <li><strong>Frontend:</strong> Blade / Bootstrap / Tailwind</li>
  <li><strong>Database:</strong> MySQL / MariaDB</li>
  <li><strong>Authentication:</strong> Laravel Breeze / Sanctum</li>
  <li><strong>Storage:</strong> Local/Public or AWS S3 for CV uploads</li>
  <li><strong>Queue System:</strong> Laravel Queue (optional)</li>
</ul>

<h3>Server Requirements</h3>
<ul>
  <li>PHP ≥ 8.2</li>
  <li>Composer</li>
  <li>Node.js 16+ & npm</li>
  <li>MySQL / MariaDB</li>
</ul>

<hr>

<h2>🔧 Installation & Setup</h2>

<pre>
# 1. Clone the repository
git clone https://github.com/nazrulislam-CSE/job-box.git

# 2. Enter project folder
cd job-box

# 3. Install backend dependencies
composer install

# 4. Install frontend assets
npm install && npm run dev

# 5. Setup environment file
cp .env.example .env
php artisan key:generate

# 6. Configure DB and Mail inside .env

# 7. Run migrations and seeders
php artisan migrate --seed

# 8. Start the development server
php artisan serve

# Visit the application at:
http://127.0.0.1:8000
</pre>

<hr>

<h2>📦 Project Structure</h2>

<pre>
app/
 ├── Http/
 ├── Models/
 ├── Services/
 ├── Repositories/
bootstrap/
config/
database/
public/
resources/
routes/
</pre>

<hr>

<h2>📊 Admin Features</h2>

<ul>
  <li>✔️ Dashboard overview (jobs, applicants, employers)</li>
  <li>✔️ Manage job categories, industries, skills</li>
  <li>✔️ Approve / reject job posts</li>
  <li>✔️ Manage companies/employers</li>
  <li>✔️ Manage candidates</li>
  <li>✔️ View applications, download CVs</li>
  <li>✔️ Full role & permission system</li>
</ul>

<hr>

<h2>🚀 Deployment</h2>

<pre>
php artisan config:cache
php artisan route:cache
php artisan optimize
php artisan storage:link
</pre>

<p>Use <strong>Supervisor</strong> for queue workers and <strong>Nginx/Apache</strong> for hosting.</p>

<hr>

<h2>🤝 Contributing</h2>
<p>Pull requests are welcome! For major changes, please open an issue first.</p>

<hr>

<h2>📄 License</h2>
<p>Distributed under the <strong>MIT License</strong>.</p>

<hr>

<h2>⭐ Support the Project</h2>
<p>If you like this project, please give it a <strong>star</strong> on GitHub! ⭐</p>
