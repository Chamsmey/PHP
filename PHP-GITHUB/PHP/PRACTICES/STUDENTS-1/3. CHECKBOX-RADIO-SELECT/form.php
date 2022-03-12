
<form action="process.php" method="post">
    <div class="mb-3">
        <select  class="form-control" name='province'>
            <option selected  disabled>Choose province</option>
            <option value="Banteay Mean Chey" >Banteay Mean Chey</option>
            <option value="Battambang" >Battambang</option>
            <option value="Siem Riep" >Siem Riep</option>
            <option value="Prey Veng" >Prey Veng</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" value="HTML" name="subject[]">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" value="CSS"  name="subject[]">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" value="JavaScript"  name="subject[]">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" value="PHP"  name="subject[]">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female" value="Female" name="gender">
        <label for="Female" class="form-label" >Female</label>

        <input type="radio" class="form-control-check" id="Male" value="Male" name="gender">
        <label for="Male" class="form-label">Male</label>
    </div>
    
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>