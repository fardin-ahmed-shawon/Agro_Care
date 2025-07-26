<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = 'Edit Buyer | Admin Panel';

$buyer_id = $_GET['id'];
?>
<?php require 'header.php'; ?>

<div class="content-area">
    <div class="page-header">
        <h2>Edit Buyer</h2>
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Edit Buyer Details</li>
        </ul>
    </div>

    <div class="box-container" style="display: flex; justify-content: center; margin-top: 100px;">
        <div id="editBuyerFormWrapper">
            <div class="modal-content" style="border: 1px solid #ccc;">
                <div class="modal-header">
                    <h3>Edit Buyer Details</h3>
                </div>
                <div class="modal-body">
                    <form id="editBuyerForm">
                        <input type="hidden" id="buyerId" value="<?= $buyer_id ?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control" required value="<?= get_buyer_details($buyer_id, '#FIRST_NAME#') ?>">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control" required value="<?= get_buyer_details($buyer_id, '#LAST_NAME#') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="buyerPhone">Phone</label>
                                <input type="tel" id="buyerPhone" class="form-control" value="<?= get_buyer_details($buyer_id, '#PHONE#') ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" id="company" class="form-control" value="<?= get_buyer_details($buyer_id, '#COMPANY#') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="buyerType">Buyer Type</label>
                                <select id="buyerType" class="form-control" required>
                                    <option value="">Select Buyer Type</option>
                                    <?php
                                    $buyer_types = [
                                        "retailer" => "Retailer",
                                        "wholesaler" => "Wholesaler",
                                        "food_processor" => "Food Processor",
                                        "exporter" => "Exporter",
                                        "restaurant/hotel" => "Restaurant/Hotel",
                                        "supermarket_chain" => "Supermarket Chain",
                                        "individual_buyer" => "Individual Buyer"
                                    ];
                                    foreach ($buyer_types as $value => $label) {
                                        $selected = (get_buyer_details($buyer_id, '#BUYER_TYPE#') ?? '') === $value ? 'selected' : '';
                                        echo "<option value=\"$value\" $selected>$label</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="businessLocation">Business Location</label>
                                <select id="businessLocation" class="form-control" required>
                                    <option value="">Select Location</option>
                                    <?php
                                    $locations = ["dhaka", "chittagong", "khulna", "rajshahi", "sylhet", "barisal", "rangpur", "mymensingh", "kishorganj", "kushtia"];
                                    foreach ($locations as $loc) {
                                        $selected = (get_buyer_details($buyer_id, '#BUSINESS_LOCATION#') ?? '') === $loc ? 'selected' : '';
                                        echo "<option value=\"$loc\" $selected>" . ucfirst($loc) . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="all-buyers.php">
                        <button type="button" class="btn btn-outline">Cancel</button>
                    </a>
                    <button type="submit" class="btn btn-primary" id="saveBuyerBtn">Save Buyer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('saveBuyerBtn').addEventListener('click', function () {
    const buyer_id      = document.getElementById('buyerId').value;
    const first_name    = document.getElementById('firstName').value.trim();
    const last_name     = document.getElementById('lastName').value.trim();
    const phone         = document.getElementById('buyerPhone').value.trim();
    const company       = document.getElementById('company').value.trim();
    const buyer_type    = document.getElementById('buyerType').value;
    const business_loc  = document.getElementById('businessLocation').value;

    if (!first_name || !last_name || !phone || !buyer_type || !business_loc) {
        Swal.fire('Error', 'Please fill out all required fields.', 'warning');
        return;
    }

    fetch('../api/buyers.php?action=update-buyer', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
            buyer_id,
            first_name,
            last_name,
            phone,
            company,
            buyer_type,
            business_location: business_loc
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
                window.location.href = "all-buyers.php";
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
