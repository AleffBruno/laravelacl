@extends('painel.templates.template')

@section('content')

<div class="relatorios">
		<div class="container">
			<ul class="relatorios">
				<li class="col-md-6 text-center">
					<a href="/painel/posts">
						<strong style="color:white" >Posts</strong>
						<h1>{{$totalPosts}}</h1>
					</a>
				</li>
				<li class="col-md-6 text-center">
					<a href="/painel/roles">
						<strong style="color:white" >Roles</strong>
						<h1>{{$totalRoles}}</h1>
					</a>
				</li>
				<li class="col-md-6 text-center">
					<a href="/painel/permissions">
						<strong style="color:white" >Permissions</strong>
						<h1>{{$totalPermissions}}</h1>
					</a>
				</li>
				<li class="col-md-6 text-center">
					<a href="/painel/users">
						<strong style="color:white" >Users</strong>
						<h1>{{$totalUsers}}</h1>
					</a>
				</li>
			</ul>
		</div>
	</div><!--Relatorios-->

@endsection