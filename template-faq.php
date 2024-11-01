<!-- FAQ //////////////////////////////////////////////////////////////////////// -->
<section class="faq-section">
    <!-- Titre -->
    <h3 class="titre_FAQ">FAQ Lorem ipsum dolor sit.</h3>
    <div class="faq-contenu">
        <!-- Section des questions -->
        <div class="questions-et-reponse">
            <!-- Questions -->
            <div class="questions">
                <button class="question" data-question="question1">
                    <span class="icone-fleche">→</span> Qu'est-ce que le TIM ?
                </button>
                <button class="question" data-question="question2">
                    <span class="icone-fleche">→</span> Quels logiciels utilise-t-on en
                    TIMS ?
                </button>
                <button class="question" data-question="question3">
                    <span class="icone-fleche">→</span> Apprend-on à créer des jeux
                    vidéo en TIMS ?
                </button>
                <button class="question" data-question="question4">
                    <span class="icone-fleche">→</span> Est-ce que je vais apprendre à
                    coder ?
                </button>
                <button class="question" data-question="question5">
                    <span class="icone-fleche">→</span> Est-ce que TIMS forme à la
                    création 3D ?
                </button>
            </div>
            <!-- Boîte de réponse blanche -->
            <div id="boite-reponse" class="boite-reponse">
                <h6 class="reponse-affichee">La réponse s'affichera ici.</h6>
            </div>
        </div>

        <!-- Contacts -->
        <div class="contact">
            <!-- Réseaux sociaux -->
            <div class="social-media">
                <!-- Site collège -->
                <a href="https://www.cmaisonneuve.qc.ca/" target="_blank">
                    <?php echo wp_get_attachment_image(52, 'thumbnail', false, ['alt' => 'Logo Collège de Maisonneuve']); ?>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/" target="_blank">
                    <?php echo wp_get_attachment_image(53, 'thumbnail', false, ['alt' => 'LinkedIn']); ?>
                </a>
                <!-- Behance -->
                <a href="https://www.behance.net/departement_tim" target="_blank">
                    <?php echo wp_get_attachment_image(51, 'thumbnail', false, ['alt' => 'Behance']); ?>
                </a>
            </div>
            <!-- Infos -->
            <div class="contact-info">
                <p>Téléphone : (514) 254 7131</p>
                <p>Adresse : 3800 Sherbrooke E.</p>
            </div>
        </div>
    </div>
</section>