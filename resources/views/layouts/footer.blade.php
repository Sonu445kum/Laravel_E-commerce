<footer class="footer-section">
    <div class="footer-top">
        <div class="footer-logo">
            <img src="{{ asset('images/ecommerceLogo.png') }}" alt="EcommerceApp">
            <span>EcommerceApp</span>
        </div>

        <div class="footer-links">
            <div class="link-group">
                <h3>Company</h3>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="#">Careers</a>
            </div>

            <div class="link-group">
                <h3>Support</h3>
                <a href="#">FAQ</a>
                <a href="#">Help Center</a>
                <a href="#">Returns</a>
            </div>

            <div class="link-group">
                <h3>Legal</h3>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Security</a>
            </div>
        </div>

        <div class="footer-social">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#" class="facebook">Facebook</a>
                <a href="#" class="twitter">Twitter</a>
                <a href="#" class="instagram">Instagram</a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} EcommerceApp. All rights reserved.</p>
    </div>
</footer>
