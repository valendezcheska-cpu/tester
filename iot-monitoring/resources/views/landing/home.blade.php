@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container hero-container">
        <div class="hero-content">
            <h1>Sistem Monitoring IoT untuk Industri Modern</h1>
            <p>Pantau dan kelola perangkat IoT Anda secara real-time dengan dashboard intuitif, analitik canggih, dan alert otomatis.</p>
            <div class="hero-buttons">
                <a href="#" class="btn-primary btn-large">Mulai Demo Gratis</a>
                <a href="#features" class="btn-secondary btn-large">Pelajari Lebih Lanjut</a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">10K+</span>
                    <span class="stat-label">Perangkat Terhubung</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">99.9%</span>
                    <span class="stat-label">Uptime</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Monitoring</span>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <div class="dashboard-preview">
                <div class="dashboard-header">
                    <div class="status-indicator active"></div>
                    <span>System Status: Online</span>
                </div>
                <div class="dashboard-metrics">
                    <div class="metric-card">
                        <i class="fas fa-thermometer-half"></i>
                        <span class="metric-value">24°C</span>
                        <span class="metric-label">Temperature</span>
                    </div>
                    <div class="metric-card">
                        <i class="fas fa-tint"></i>
                        <span class="metric-value">65%</span>
                        <span class="metric-label">Humidity</span>
                    </div>
                    <div class="metric-card">
                        <i class="fas fa-bolt"></i>
                        <span class="metric-value">220V</span>
                        <span class="metric-label">Voltage</span>
                    </div>
                    <div class="metric-card">
                        <i class="fas fa-wifi"></i>
                        <span class="metric-value">Active</span>
                        <span class="metric-label">Connection</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features">
    <div class="container">
        <div class="section-header">
            <h2>Fitur Unggulan</h2>
            <p>Teknologi terdepan untuk monitoring perangkat IoT Anda</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Real-time Analytics</h3>
                <p>Dashboard interaktif dengan visualisasi data real-time untuk pengambilan keputusan yang lebih cepat.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <h3>Smart Alerts</h3>
                <p>Notifikasi otomatis melalui email, SMS, atau webhook ketika terjadi anomali pada perangkat.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Keamanan Tinggi</h3>
                <p>Enkripsi end-to-end dan autentikasi multi-faktor untuk melindungi data perangkat Anda.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3>Cloud Based</h3>
                <p>Akses dari mana saja kapan saja tanpa perlu instalasi infrastruktur yang kompleks.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-plug"></i>
                </div>
                <h3>Mudah Diintegrasikan</h3>
                <p>API RESTful yang lengkap dan dokumentasi terperinci untuk integrasi dengan sistem existing.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobile Friendly</h3>
                <p>Aplikasi mobile untuk iOS dan Android agar Anda tetap terhubung dengan perangkat Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section id="solutions" class="solutions">
    <div class="container">
        <div class="section-header">
            <h2>Solusi untuk Berbagai Industri</h2>
            <p>Platform kami dirancang untuk memenuhi kebutuhan berbagai sektor industri</p>
        </div>
        
        <div class="solutions-grid">
            <div class="solution-card">
                <div class="solution-image">
                    <i class="fas fa-industry"></i>
                </div>
                <h3>Manufaktur</h3>
                <p>Monitoring mesin produksi, predictive maintenance, dan optimasi efisiensi operasional.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Equipment Monitoring</li>
                    <li><i class="fas fa-check"></i> Predictive Maintenance</li>
                    <li><i class="fas fa-check"></i> Quality Control</li>
                </ul>
            </div>
            
            <div class="solution-card">
                <div class="solution-image">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Pertanian</h3>
                <p>Smart farming dengan monitoring kondisi tanah, cuaca, dan irigasi otomatis.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Soil Monitoring</li>
                    <li><i class="fas fa-check"></i> Weather Tracking</li>
                    <li><i class="fas fa-check"></i> Auto Irrigation</li>
                </ul>
            </div>
            
            <div class="solution-card">
                <div class="solution-image">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Smart Building</h3>
                <p>Kelola energi, HVAC, dan keamanan gedung secara terpusat dan efisien.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Energy Management</li>
                    <li><i class="fas fa-check"></i> HVAC Control</li>
                    <li><i class="fas fa-check"></i> Security System</li>
                </ul>
            </div>
            
            <div class="solution-card">
                <div class="solution-image">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Logistik</h3>
                <p>Tracking armada, monitoring kondisi kargo, dan optimasi rute pengiriman.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Fleet Tracking</li>
                    <li><i class="fas fa-check"></i> Cargo Monitoring</li>
                    <li><i class="fas fa-check"></i> Route Optimization</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Paket Harga</h2>
            <p>Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
        </div>
        
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3>Starter</h3>
                    <div class="price">
                        <span class="currency">Rp</span>
                        <span class="amount">299.000</span>
                        <span class="period">/bulan</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Hingga 50 Perangkat</li>
                    <li><i class="fas fa-check"></i> Real-time Monitoring</li>
                    <li><i class="fas fa-check"></i> Basic Analytics</li>
                    <li><i class="fas fa-check"></i> Email Support</li>
                    <li><i class="fas fa-check"></i> API Access</li>
                    <li class="disabled"><i class="fas fa-times"></i> Custom Alerts</li>
                    <li class="disabled"><i class="fas fa-times"></i> Priority Support</li>
                </ul>
                <a href="#" class="btn-primary btn-block">Pilih Paket</a>
            </div>
            
            <div class="pricing-card featured">
                <div class="badge">Populer</div>
                <div class="pricing-header">
                    <h3>Professional</h3>
                    <div class="price">
                        <span class="currency">Rp</span>
                        <span class="amount">799.000</span>
                        <span class="period">/bulan</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Hingga 500 Perangkat</li>
                    <li><i class="fas fa-check"></i> Real-time Monitoring</li>
                    <li><i class="fas fa-check"></i> Advanced Analytics</li>
                    <li><i class="fas fa-check"></i> Priority Support</li>
                    <li><i class="fas fa-check"></i> API Access</li>
                    <li><i class="fas fa-check"></i> Custom Alerts</li>
                    <li><i class="fas fa-check"></i> Data Export</li>
                </ul>
                <a href="#" class="btn-primary btn-block">Pilih Paket</a>
            </div>
            
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3>Enterprise</h3>
                    <div class="price">
                        <span class="currency">Rp</span>
                        <span class="amount">Hubungi Kami</span>
                    </div>
                </div>
                <ul class="pricing-features">
                    <li><i class="fas fa-check"></i> Unlimited Perangkat</li>
                    <li><i class="fas fa-check"></i> Real-time Monitoring</li>
                    <li><i class="fas fa-check"></i> Custom Analytics</li>
                    <li><i class="fas fa-check"></i> 24/7 Dedicated Support</li>
                    <li><i class="fas fa-check"></i> Full API Access</li>
                    <li><i class="fas fa-check"></i> Custom Integration</li>
                    <li><i class="fas fa-check"></i> SLA Guarantee</li>
                </ul>
                <a href="#" class="btn-secondary btn-block">Hubungi Sales</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Hubungi Kami</h2>
            <p>Siap membantu Anda mengimplementasikan solusi IoT</p>
        </div>
        
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>Jl. Teknologi No. 123, Jakarta Selatan, Indonesia</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 21 5555 8888</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@iotmonitor.co.id</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Jam Operasional</h4>
                        <p>Senin - Jumat: 08:00 - 17:00 WIB</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Perusahaan</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary btn-block">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Siap Memulai Transformasi Digital Anda?</h2>
            <p>Bergabunglah dengan ratusan perusahaan yang telah mempercayakan monitoring IoT mereka kepada kami.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-primary btn-large">Demo Gratis 14 Hari</a>
                <a href="#contact" class="btn-white btn-large">Konsultasi Gratis</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Smooth scrolling untuk anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
</script>
@endpush
