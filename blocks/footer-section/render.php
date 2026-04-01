<?php
/**
 * Footer Section Block — Server-side render
 */

$logo_url = $attributes['logoUrl'] ?? '/wp-content/uploads/2026/03/celestra-footer-logo.webp';
?>

<footer class="celestra-footer wp-block-celestra-footer-section alignfull">

    <div class="celestra-footer__inner">

        <!-- Column 1: Quick Links -->
        <div class="celestra-footer__column">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/about" title="About Celestra">About</a></li>
                <li><a href="/services" title="Our Services">Services</a></li>
                <li><a href="/portfolio" title="Our Portfolio">Portfolio</a></li>
                <li><a href="/partners" title="Our Partners">Partners</a></li>
                <li><a href="/offers" title="Special Offers">Offers</a></li>
                <li><a href="/contact" title="Contact Us">Contact</a></li>
            </ul>
        </div>

        <!-- Column 2: Find & Book -->
        <div class="celestra-footer__column">
            <h4>Find & Book</h4>
            <ul>
                <li><a href="/destinations" title="Explore Destinations">Destinations</a></li>
                <li><a href="/meetings-events" title="Meetings & Events">Meetings & Events</a></li>
                <li><a href="/dining-experiences" title="Dining & Experiences">Dining & Experiences</a></li>
            </ul>
        </div>

        <!-- Column 3: Corporate -->
        <div class="celestra-footer__column">
            <h4>Corporate</h4>
            <ul>
                <li><a href="/our-brands" title="Our Brands">Our Brands</a></li>
                <li><a href="/residences" title="Residences">Residences</a></li>
                <li><a href="/partnerships" title="Partnerships">Partnerships</a></li>
                <li><a href="/investors" title="Investors">Investors</a></li>
                <li><a href="/careers" title="Careers">Careers</a></li>
                <li><a href="/sustainability" title="Sustainability & Community">Sustainability & Community</a></li>
            </ul>
        </div>

        <!-- Column 4: Links -->
        <div class="celestra-footer__column">
            <h4>&nbsp;</h4>
            <ul>
                <li><a href="/find-reservation" title="Find a Reservation">Find a Reservation</a></li>
                <li><a href="/contact-us" title="Contact Us">Contact Us</a></li>
                <li><a href="/support-centre" title="Support Centre">Support Centre</a></li>
            </ul>
        </div>

        <!-- Column Right: Logo & Socials -->
        <div class="celestra-footer__right">
            <div class="celestra-footer__logo">
                <img src="<?php echo esc_url($logo_url); ?>" alt="Celestra Logo" title="Celestra Logo" />
            </div>

            <div class="celestra-footer__socials">
                <a href="#" class="celestra-footer__social-icon" aria-label="Facebook" title="Follow us on Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="celestra-footer__social-icon" aria-label="Instagram" title="Follow us on Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="celestra-footer__social-icon" aria-label="YouTube" title="Follow us on YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="celestra-footer__social-icon" aria-label="LinkedIn" title="Follow us on LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="celestra-footer__bottom">
        <div class="celestra-footer__bottom-links">
            <a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a> | <a href="/terms-conditions" title="Terms & Conditions">Terms & Conditions</a>
        </div>
        <div class="celestra-footer__copyright">
            © 2025 Celestra Management Group. All Rights Reserved.
        </div>
    </div>

</footer>