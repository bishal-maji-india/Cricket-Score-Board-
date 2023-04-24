<div>
  <form name="player_list_form" method="post">
    <table class="table">
      <thead>
        <td>
          <h2>Name</h2>
        </td>
        <td>
          <h2>Score</h2>
        </td>
        <td>
          <h2>Ball Faced</h2>
        </td>
        <td>
          <h2>Strike Rate</h2>
        </td>
      </thead>
      <tbody>
        <?php
        foreach ($player_list as $data) {
        ?>
          <tr class="flex">
            <td>
              <h2><?php echo $data['player_name'] ?? ''; ?></h2>
            </td>
            <td>
              <h2><?php echo $data['player_score'] ?? ''; ?></h2>
            </td>
            <td>
              <h2><?php echo $data['ball_faced'] ?? ''; ?></h2>
            </td>
            <td>
              <h2><?php echo $data['player_score']  /  $data['ball_faced'] * 100 ?></h2>
            </td>

          </tr>

        <?php
        }
        ?>


      </tbody>
    </table>
  </form>

</div>