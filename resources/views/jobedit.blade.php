<x-layout>
<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6></h6>
            <h2>Manage your listings</h2>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="container">
    <div class="p-20">
    <section >
  <div class=" px-4 mx-auto max-w-2xl lg:py-16">
      <h1 class="mb-20  ml-60 text-xl font-bold text-slate-600 ">Edit your job</h1>
      <form action="{{route('jobs.update',$job)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Job title</label>
                  <input type="text" value="{{$job->title}}" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="ex: Engineer" >
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">Location</label>
                  <input value="{{$job->location}}" type="text" name="location" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="ex: Maroc , Rabat" >
                  @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Company website </label>
                  <input type="text" value="{{$job->website}}" name="website" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder=" ex: www.Plotlist.com" >
                  @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">Company name</label>
                  <input type="text" value="{{$job->company}}" name="company" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="ex: Plotlist">
                  @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                <div class="w-full">
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Salary (not required) /year </label>
                  <input type="number" value="{{$job->salary}}" name="salary" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder=" ex: $2999" >
                  @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Remote</label>
                  <select id="category"  name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                      <option selected="">Remote</option>
                      <option value="On site">On site</option>
                      <option value="Hybrid">Hybrid</option>
                      
                  </select>
                  @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div>
                  
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Company's logo</label>
                <input   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " name="logo" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">Your company's logo would be usefull on the job post</div>
                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div> 
                <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Contact email </label>
                  <input value="{{$job->email}}"  type="text" name="email" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " placeholder="ex: Plotlist@gmail.com" >
                  @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div class="sm:col-span-2">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                  <textarea   id="description" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Detailed description of the job">{{$job->description}}</textarea>
                  @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-white bg-slate-600 rounded-lg hover:bg-slate-700 focus:ring-4 focus:ring-slate-300">
    <i class="fa fa-paper-plane"></i> Update job
</button>
      </form>
  </div>
</section>
    </div>
  </div>

</x-layout>