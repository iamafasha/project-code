        <div class="form-group">
            <label for="title">Name</label>
            <input class="form-control" type="text"  name="name"  required value={{ $company->name??"" }}>
        </div>

        <div class="form-group">
            <label for="title">Email</label>
            <input class="form-control" type="email" name="email"  required value={{ $company->email??"" }}>
        </div>

        <div class="form-group d-flex py-2 align-items-center">
            <label class="mr-2" for="title">Logo</label>
            @if(isset($company))
                <img class="mr-2"  src="{{ Storage::url($company->logo) ?? "" }}" alt="" height="70px">
            @endif
            <input class="form-control" type="file" name="logo" id="title">
        </div>


         <div class="form-group">
            <label for="title">Website</label>
            <input class="form-control" type="url" name="website" value={{ $company->website??"" }} >
        </div>
