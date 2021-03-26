<?php
    //Side Bar 
?>
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <?php
                        $linkHtml = '<i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Participants</span>';
                        echo $this->Html->link($linkHtml,[
                            'controller' => 'Participants',
                            'prefix' => 'admin',
                            'action' => 'index'
                        ],[
                            'class' => 'sidebar-link waves-effect waves-dark sidebar-link',
                            'escape' => false
                        ]);
                    ?>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>