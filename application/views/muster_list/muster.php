<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>RANK</th>
                <th>FIRE / EXPLOTION</th>
                <th>PERSONAL RESCUE MEDICAL (CONFINED SPACE)</th>
                <th>OIL SPILLAGE & POLLUTION</th>
                <th>MAN OVER BOARD</th>
                <th>EMERGENCY STEERING</th>
                <th>FLOODING</th>
                <th>ELECTRICAL POWER FAILURE</th>
                <th>COLLUSION, STRANDING/ STRUCTURAL DAMAGE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($muster as $m) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><b><?= $m->rank ?></b></td>
                    <td><?= $m->fire ?></td>
                    <td><?= $m->personal ?></td>
                    <td><?= $m->oil ?></td>
                    <td><?= $m->man ?></td>
                    <td><?= $m->emergency ?></td>
                    <td><?= $m->flooding ?></td>
                    <td><?= $m->electric ?></td>
                    <td><?= $m->collusion ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>