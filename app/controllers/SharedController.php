<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pelanggan_name_pelanggan_value_exist Model Action
     * @return array
     */
	function pelanggan_name_pelanggan_value_exist($val){
		$db = $this->GetModel();
		$db->where("name_pelanggan", $val);
		$exist = $db->has("pelanggan");
		return $exist;
	}

	/**
     * pelanggan_email_value_exist Model Action
     * @return array
     */
	function pelanggan_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("pelanggan");
		return $exist;
	}

	/**
     * getcount_motor Model Action
     * @return Value
     */
	function getcount_motor(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM motor";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_transaksi Model Action
     * @return Value
     */
	function getcount_transaksi(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM transaksi";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_transaksidetail Model Action
     * @return Value
     */
	function getcount_transaksidetail(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM transaksi_detail";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
	* barchart_transaksi Model Action
	* @return array
	*/
	function barchart_transaksi(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  t.id_pelanggan, t.total_transaksi FROM transaksi AS t";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'total_transaksi');
		$dataset_labels =  array_column($dataset1, 'id_pelanggan');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* barchart_datatransaksipenjualmotor Model Action
	* @return array
	*/
	function barchart_datatransaksipenjualmotor(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  td.id_detail, td.id_transaksi, td.id_motor, td.jumlah FROM transaksi_detail AS td";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'id_motor');
		$dataset_labels =  array_column($dataset1, 'jumlah');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* doughnutchart_diagramtransaksi Model Action
	* @return array
	*/
	function doughnutchart_diagramtransaksi(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  t.id_transaksi, t.id_pelanggan, t.tanggal, t.total_transaksi, t.cicilan, t.garansi FROM transaksi AS t";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'total_transaksi');
		$dataset_labels =  array_column($dataset1, 'id_pelanggan');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* doughnutchart_diagramtranksaksidetail Model Action
	* @return array
	*/
	function doughnutchart_diagramtranksaksidetail(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  td.id_detail, td.id_transaksi, td.id_motor, td.jumlah FROM transaksi_detail AS td";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'id_motor');
		$dataset_labels =  array_column($dataset1, 'id_transaksi');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

}
