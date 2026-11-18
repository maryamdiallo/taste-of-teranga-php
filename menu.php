<?php $pageTitle = 'Menu';
include 'header.php'; ?>
<main class="wrap section">
    <p class="eyebrow">FLAVORS OF WEST AFRICA</p>
    <h1>Our Menu</h1>
    <p>Explore delicious dishes, desserts, and drinks from across West Africa.</p>
    <nav class="menu-categories" aria-label="Menu categories"><a href="#main-dishes">Main Dishes</a><a
            href="#desserts">Desserts</a><a href="#drinks">Drinks</a></nav>

    <section class="menu-section" id="main-dishes">
        <h2 class="menu-section-title">Main Dishes</h2>
        <div class="menu-grid">
            <article class="dish"><img src="https://upload.wikimedia.org/wikipedia/commons/2/23/Plat_ceebu_jen.jpg"
                    alt="Photo of Thieboudienne" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Thieboudienne <span>$18</span></h2>
                    <p>Senegalese rice with fish and vegetables.</p>
                </div>
            </article>
            <article class="dish"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/8/8d/Plat_atti%C3%A9k%C3%A9.jpg"
                    alt="Photo of Attiéké with Fish" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Attiéké with Fish <span>$20</span></h2>
                    <p>Ivorian cassava couscous with grilled fish.</p>
                </div>
            </article>
            <article class="dish"><img
                    src="https://snapcalorie-webflow-website.s3.us-east-2.amazonaws.com/media/recipe_pics_v2/medium/dibi_senegalese_grilled_lamb_with_onion_mustard_sauce.jpg"
                    alt="Photo of Dibi (Grilled Lamb)" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Dibi (Grilled Lamb) <span>$22</span></h2>
                    <p>Smoky Senegalese grilled lamb with onions and mustard.</p>
                </div>
            </article>
            <article class="dish"><img
                    src="https://commons.wikimedia.org/wiki/Special:FilePath/Plat_de_yassa.jpg?width=900"
                    alt="Photo of Chicken Yassa" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Chicken Yassa <span>$16</span></h2>
                    <p>Chicken in lemon and onion sauce with rice.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="menu-section" id="desserts">
        <h2 class="menu-section-title">Desserts</h2>
        <div class="menu-grid">
            <article class="dish"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Thiakry.jpg?width=900"
                    alt="Photo of Thiakry (Dégué)" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Thiakry (Dégué) <span>$7</span></h2>
                    <p>Creamy millet and yogurt dessert.</p>
                </div>
            </article>
            <article class="dish"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Puff-puff.jpg?width=900"
                    alt="Photo of Puff-Puff" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Puff-Puff <span>$6</span></h2>
                    <p>Soft, sweet West African fried dough bites.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="menu-section" id="drinks">
        <h2 class="menu-section-title">Drinks</h2>
        <div class="menu-grid">
            <article class="dish"><img src="https://www.maisonjelima.fr/assets/menu-jus-bissap-glace-DwCE8aGQ.jpg"
                    alt="Photo of Bissap" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Bissap <span>$4</span></h2>
                    <p>Cold hibiscus drink.</p>
                </div>
            </article>
            <article class="dish"><img
                    src="https://i0.wp.com/www.savourous.com/wp-content/uploads/2021/02/ginger-juice8-book.jpg?fit=1287%2C1286&amp;ssl=1"
                    alt="Photo of Ginger Juice" loading="lazy"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                <div class="photo-fallback" style="display:none">Photo unavailable</div>
                <div>
                    <h2>Ginger Juice <span>$5</span></h2>
                    <p>Refreshing ginger and citrus drink.</p>
                </div>
            </article>
        </div>
    </section>

   
</main>
<?php include 'footer.php'; ?>