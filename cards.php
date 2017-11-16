      <div class="container">
         <div id="accordion">
            <div class="card">
               <div class="card-header">
                  <a class="card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">#1 LIDL</a>
               </div>
               <div class="collapse show" id="collapseOne">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'LIDL'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_lidl(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">#2 KAUFLAND</a>
               </div>
               <div class="collapse" id="collapseTwo">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'KAUFLAND'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_kaufland(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">#3 NORMA</a>
               </div>
               <div class="collapse" id="collapseThree">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'NORMA'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_norma(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">#4 ALDI</a>
               </div>
               <div class="collapse" id="collapseFour">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'ALDI'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_aldi(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">#5 PENNY</a>
               </div>
               <div class="collapse" id="collapseFive">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'PENNY'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_penny(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">#6 Müller</a>
               </div>
               <div class="collapse" id="collapseSix">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'MUELLER'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_mueller(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">#7 Thomas Philipps</a>
               </div>
               <div class="collapse" id="collapseSeven">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'THOMAS_PHILIPPS'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_thomas_philipps(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header">
                  <a class="collapsed card-link" id="headline" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">#8 Netto Marken Discount</a>
               </div>
               <div class="collapse" id="collapseEight">
                  <div class="card-body">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Anzahl</th>
                              <th>Preis</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $stmt = $con->prepare("SELECT * FROM einkaufsliste where markt = 'ROTER_NETTO'");
                              $stmt->execute();
                              while($row = $stmt->fetch()) {
                              $name = $row['name'];
                              $anzahl = $row['anzahl'];
                              $preis = $row['preis'];
                              echo "<tr>";
                              echo "<td>$name</td>";
                              echo "<td>$anzahl x</td>";
                              echo "<td>$preis €</td>";
                              echo "</tr>";
                              }
                               ?>
                        </tbody>
                     </table>
                     <button class="btn btn-success" style='margin-left: 80%' type="button">Insgesamt: <?= ausgabewert_roter_netto(0); ?>
                     €</button>
                  </div>
               </div>
            </div>
         </div>
      </div>