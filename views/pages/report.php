
<div id="home">
    <div class="team-section">
        <div class="team-first-zone">
            <div class="home-slogan">
                <h1>Dénoncer vos balises !</h1>
            </div>
        </div>

        <div class="container-btn">
            <a href="index.php?page=report_add" class="reportBtn" id="addReportBtn">Ajouter</a>
            <button class="reportBtn" id="modifyReportBtn">modifier️️️</button>
            <button class="reportBtn" id="deleteReportBtn">Supprimer️️️</button>
        </div>

        <div class="container-report">
            <?php foreach ($allReports as $reports) { ?>
                <div class="report-table">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Localisation</th>
                            <th>Salle</th>
                            <th>Catégorie</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $reports["description"] ?></td>
                            <td><?= $reports["localisation"] ?></td>
                            <td><?= $reports["num_salle"] ?></td>
                            <td><?= $reports["categorie"] ?></td>
                            <td><?= $reports["published_at"] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
