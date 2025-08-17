<div>
<h1>JOBS</h1>
@foreach ($jobs as $job )
    <div>
       <b>Title : </b>{{ $job['title'] }}<b> || Company : </b>{{ $job['company'] }}<b> || Salary : </b>{{ $job['salary'] }}
    </div>
@endforeach
</div>
