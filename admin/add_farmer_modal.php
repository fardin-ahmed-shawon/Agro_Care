    <!-- Add Farmer Modal -->
    <div class="modal" id="addFarmerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Farmer</h3>
                <button class="close">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="farmerName">Full Name</label>
                            <input type="text" id="farmerName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="farmerEmail">Email</label>
                            <input type="email" id="farmerEmail" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="farmerPhone">Phone</label>
                            <input type="tel" id="farmerPhone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="farmerLocation">Location</label>
                            <select id="farmerLocation" class="form-control" required>
                                <option value="">Select Location</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="khulna">Khulna</option>
                                <option value="rajshahi">Rajshahi</option>
                                <option value="sylhet">Sylhet</option>
                                <option value="barisal">Barisal</option>
                                <option value="rangpur">Rangpur</option>
                                <option value="mymensingh">Mymensingh</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="farmType">Farm Type</label>
                            <select id="farmType" class="form-control" required>
                                <option value="">Select Farm Type</option>
                                <option value="crop">Crop Production</option>
                                <option value="livestock">Livestock</option>
                                <option value="poultry">Poultry</option>
                                <option value="dairy">Dairy</option>
                                <option value="mixed">Mixed Farming</option>
                                <option value="aquaculture">Aquaculture</option>
                                <option value="horticulture">Horticulture</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="farmSize">Farm Size (acres)</label>
                            <input type="number" id="farmSize" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="farmerBio">Bio/Description</label>
                        <textarea id="farmerBio" class="form-control" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline">Cancel</button>
                <button class="btn btn-primary">Save Farmer</button>
            </div>
        </div>
    </div>