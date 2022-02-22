        <div class="form-group">
            <label for="title">First Name</label>
            <input class="form-control" type="text"  name="first_name"  required value={{ $employee->first_name??"" }}>
        </div>

        <div class="form-group">
            <label for="title">Last Name</label>
            <input class="form-control" type="text" name="last_name"  required value={{ $employee->last_name??"" }}>
        </div>

        <div class="form-group">
            <label for="title">Email</label>
            <input class="form-control" type="email" name="email"  required value={{ $employee->email??"" }}>
        </div>


         <div class="form-group">
            <label for="title">Phone</label>
            <input class="form-control" type="text" name="phone" value={{ $employee->phone??"" }} >
        </div>
