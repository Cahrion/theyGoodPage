
<!-- Modal -->
<div id="modelId" class="modal fade" tabindex="-1"> <!-- Product Modal For Extra Product -->
    <div class="modal-dialog" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="modal-who"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center modal-body-Eproduct" style="height:600px;overflow-y: scroll;">
                <div class="text-center" style="border-bottom:1px dashed grey;margin-bottom:10px;padding-bottom: 5px;">
                <div class="resultArea d-flex justify-content-center" style="font-size:30px">
                    <div class="peopleCostModalArea"></div>
                    <div style="position:relative;">
                        <span style="position:absolute;top:-10px;left:calc(50% - 50px);text-align: center;font-size: 16px;width: 100px;" class="peoplePercentModalArea">xxxx</span>
                        <span style="position:absolute;top:27px;left:calc(50% - 50px);text-align: center;font-size: 16px;width: 100px;" class="peopleEarnModalArea">xxxx</span>
                        ~~~~> 
                    </div>
                    <div class="stockCloseModalArea"></div>
                </div>

                </div>
                <div class="accordion" id="accordionExample">

                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center" name="">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="finishModal(this)" name="id" id="finishModal">Hisse işlemini Sonlandır</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>