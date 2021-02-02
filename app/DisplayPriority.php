<?php
namespace TaskManager;
class DisplayPriority
{
    static public function displayPriority($data){

            if($data == 'low'){
                $data = ucfirst($data);
              echo "<td class='d-flex justify-content-center pt-2'>
                       <p class='text-center border rounded-pill bg-success w-100 mb-0'>$data</p>
                    </td>";
            }
            elseif($data == 'normal'){
                $data = ucfirst($data);
                echo "<td class='d-flex justify-content-center pt-2'>
                       <p class='text-center border rounded-pill bg-info w-100 mb-0'>$data</p>
                    </td>";
            }
            else {
                $data = ucfirst($data);
                echo "<td class='d-flex justify-content-center pt-2'>
                       <p class='text-center border rounded-pill bg-danger w-100 mb-0'>$data</p>
                    </td>";
            }

        }

}
