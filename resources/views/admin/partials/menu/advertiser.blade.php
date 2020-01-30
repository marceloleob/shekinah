
    <div class="settings_links_2 bg_white">
        <ul>
            <li><span>Meus Imóveis</span></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="{!! route('properties-mine') !!}"><i class="fas fa-city"></i>Listar Imóveis</a></li>
        </ul>
        <ul>
            <li><span>Resolver Pendências</span></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="fas fa-user-tie"></i>Dados do Proprietário</a></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="far fa-file-alt"></i>Documentos do Imóvel</a></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="fas fa-camera-retro"></i>Fotos do Imóvel</a></li>
        </ul>
        <ul>
            <li><span>Configurações</span></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="fa fa-user-cog"></i>Meu perfil</a></li>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="fa fa-unlock-alt"></i>Alterar minha senha</a></li>
        </ul>
        <ul>
            <li class="{!! (request()->is('admin/')) ? 'active' : '' !!}"><a href="#"><i class="fa fa-sign-out-alt"></i>Sair</a></li>
        </ul>
    </div>
