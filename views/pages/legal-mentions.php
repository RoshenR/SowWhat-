<div id="legal-mentions">
	<h1>Mentions Légales</h1>
	<h2>Informations légales</h2>
        <p><strong>Nom de l'entreprise :</strong> <?= htmlspecialchars($companyName); ?></p>
        <p><strong>Adresse :</strong> <?= htmlspecialchars($address); ?></p>
        <p><strong>Email :</strong> <a href="mailto:<?= htmlspecialchars($email); ?>"><?= htmlspecialchars($email); ?></a></p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($phone); ?></p>
        <p><strong>Directeur de publication :</strong> <?= htmlspecialchars($director); ?></p>

        <h2>Hébergement</h2>
        <p><strong>Nom de l'hébergeur :</strong> <?= htmlspecialchars($hostName); ?></p>
        <p><strong>Adresse de l'hébergeur :</strong> <?= htmlspecialchars($hostAddress); ?></p>
        <p><strong>Téléphone de l'hébergeur :</strong> <?= htmlspecialchars($hostPhone); ?></p>

        <h2>Protection des données</h2>
        <p><strong>Numéro de déclaration CNIL :</strong> <?= htmlspecialchars($cnilDeclaration); ?></p>
        <p>Conformément à la loi "Informatique et Libertés", vous disposez d’un droit d’accès, de rectification et de suppression des données vous concernant. Pour exercer ce droit, contactez-nous par email ou par courrier.</p>

        <h2>Responsabilité</h2>
        <p>Le contenu du site est fourni à titre informatif. <?= htmlspecialchars($companyName); ?> ne saurait être tenu responsable des erreurs ou omissions dans les informations diffusées ou des conséquences de leur utilisation.</p>
    </div>
</div>