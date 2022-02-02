<div class="contact-bg">
    <div class="row w-100 p-5">
        <div class="col contact-info w-75 d-flex justify-content-center align-items-center flex-column">
            <div class="address">
                <span>ERNEO SAS</span>
                <span>505 rue Louis Lépine</span>
                <span>34000 MONTPELLIER</span>
            </div>
            <div class="entrances">
                <span class="car">À 5 mn de l'autoroute A9</span>
                <span class="plane">À 10 mn de l'Aéroport Montpellier Méditerranée</span>
                <span class="train">À 10 mn de la Gare Montpellier Sud De France</span>
                <span class="train">À 20 mn de la Gare Montpellier Saint-Roch</span>
            </div>
        </div>

        <div class="col w-100">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column w-100 align-items-center">
                    <h2>Contactez-nous</h2>
                    <div class="contact-form-ctn p-5 d-flex justify-content-center w-100">
                        <form action="<?= BASE_URL ?>website/sendEmail.php" id="myForm" method="POST" class="form">
                            <div class="form-group">
                                <label for="name" class="form-label">Votre nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" tabindex="1" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Votre email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" tabindex="2" required>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="form-label">Objet</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" tabindex="3" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" rows="5" cols="50" id="body" name="message" placeholder="Message" tabindex="4" required></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn">Envoyer</button>
                            </div>
                            <!-- nom prénom société num tel mail objet msg -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col france"></div>
    </div>

    <div class="contact-map w-100 mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.6635559442534!2d3.9092850510648316!3d43.613546362909496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a583fe267931%3A0xe80cfed499eb26e3!2sERNEO!5e0!3m2!1sfr!2sfr!4v1618389600004!5m2!1sfr!2sfr" class="w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>