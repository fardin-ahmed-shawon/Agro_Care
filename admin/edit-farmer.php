<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = 'Edit Farmer | Admin Panel';
$farmer_id = $_GET['id'];
?>
<?php require 'header.php'; ?>

<div class="content-area">
    <div class="page-header">
        <h2></h2>
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Edit Farmer Details</li>
        </ul>
    </div>

    <div class="box-container" style="display: flex; justify-content: center; margin-top: 100px;">
        <div id="addFarmerModal">
            <div class="modal-content" style="border: 1px solid #ccc;">
                <div class="modal-header">
                    <h3>Edit Farmer Details</h3>
                </div>
                <div class="modal-body">
                    <form id="editFarmerForm">
                        <input type="hidden" id="farmerId" value="<?= $farmer_id ?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control" required value="<?= get_farmer_details($farmer_id, '#FIRST_NAME#') ?>">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control" required value="<?= get_farmer_details($farmer_id, '#LAST_NAME#') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="farmerPhone">Phone</label>
                                <input type="tel" id="farmerPhone" class="form-control" value="<?= get_farmer_details($farmer_id, '#PHONE#') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="farmerLocation">Location</label>
                                <select id="farmerLocation" class="form-control" required>
                                    <option value="">Select Location</option>
                                    <?php
                                    $locations = ["dhaka", "chittagong", "khulna", "rajshahi", "sylhet", "barisal", "rangpur", "mymensingh", "kishorganj", "kushtia"];
                                    foreach ($locations as $loc) {
                                        $selected = (get_farmer_details($farmer_id, '#LOCATION#') ?? '') === $loc ? 'selected' : '';
                                        echo "<option value=\"$loc\" $selected>" . ucfirst($loc) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="farmType">Farm Type</label>
                                <select id="farmType" class="form-control" required>
                                    <option value="">Select Farm Type</option>
                                    <?php
                                    $farm_types = [
                                        "crop_production" => "Crop Production",
                                        "livestock" => "Livestock",
                                        "poultry" => "Poultry",
                                        "dairy" => "Dairy",
                                        "mixed_farming" => "Mixed Farming",
                                        "aquaculture" => "Aquaculture",
                                        "horticulture" => "Horticulture"
                                    ];
                                    foreach ($farm_types as $value => $label) {
                                        $selected = (get_farmer_details($farmer_id, '#FARM_TYPE#') ?? '') === $value ? 'selected' : '';
                                        echo "<option value=\"$value\" $selected>$label</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="farmSize">Farm Size (acres)</label>
                                <input type="number" id="farmSize" class="form-control" value="<?= get_farmer_details($farmer_id, '#FARM_SIZE#') ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="all-farmers.php">
                        <button type="button" class="btn btn-outline">Cancel</button>
                    </a>
                    <button type="submit" class="btn btn-primary" id="saveFarmerBtn">Save Farmer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('saveFarmerBtn').addEventListener('click', function () {
    const farmer_id   = document.getElementById('farmerId').value;
    const first_name  = document.getElementById('firstName').value.trim();
    const last_name   = document.getElementById('lastName').value.trim();
    const phone       = document.getElementById('farmerPhone').value.trim();
    const location    = document.getElementById('farmerLocation').value;
    const farm_type   = document.getElementById('farmType').value;
    const farm_size   = document.getElementById('farmSize').value;

    if (!first_name || !last_name || !phone || !location || !farm_type || !farm_size) {
        Swal.fire('Error', 'Please fill out all required fields.', 'warning');
        return;
    }

    fetch('../api/farmers.php?action=update-farmer', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
            farmer_id,
            first_name,
            last_name,
            phone,
            location,
            farm_type,
            farm_size
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message,
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = "all-farmers.php";
            });
        } else {
            Swal.fire('Error', data.message, 'error');
        }
    })
    .catch(err => {
        console.error('Fetch error:', err);
        Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
    });
});
</script>

<?php require 'footer.php'; ?>