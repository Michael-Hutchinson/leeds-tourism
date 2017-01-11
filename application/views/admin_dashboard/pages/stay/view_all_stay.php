    <section id="boxes">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 boxes">
            <div class="white-background overflow-hidden">
                <div class="col-xs-12 col-sm-12 padding0">
                  <div class="padding20 box-text">
                    <h2><span class="blue">VIEW ALL PAGES</span></h2>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php $this->load->view('admin_dashboard/page_components/admin_left_navbar'); ?>
            </div>
            <!-- Content Column -->

        <div class="col-md-9">
        <p><a href="/admin/stay/view/add" class="btn btn-primary">Add New Page</a></p>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Page Title</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $r) {
                echo '<tr>';
                    echo '<td>'.$r->id.'</td>';
                    echo '<td>'.$r->title.'</td>';
                    echo '<td>'.'<a href="/stay/page/'.$r->id.'" class="btn btn-default">View</a>'.'</td>';
                    echo '<td>'.'<a href="/admin/stay/view/edit/'.$r->id.'" class="btn btn-info">Edit</a>'.'</td>';
                    echo '<td>'.'<a href="/admin/stay/view/delete/'.$r->id.'" onclick="return confirm(\'Are You Sure You Want To Delete This?\');" class="btn btn-danger">Delete</a>'.'</td>';
                echo '</tr>';
            } ?>
            </tbody>
        </table>
        </div>
        </div>

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>