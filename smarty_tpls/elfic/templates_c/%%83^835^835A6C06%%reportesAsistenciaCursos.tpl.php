<?php /* Smarty version 2.6.26, created on 2012-06-06 22:30:41
         compiled from reportes/reportesAsistenciaCursos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'reportes/reportesAsistenciaCursos.tpl', 46, false),)), $this); ?>
<?php echo '
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.superbox-min.js"></script>

  <link rel="stylesheet" href="css/jquery.superbox.css" type="text/css" />
<script type=\'text/javascript\'>
$(function(){
$.superbox();
});
</script>
'; ?>

<div align="center" class="centermain">
  <div class="main">
    <table class="adminheading">
    <tr>
      <th class="reportes">
        Reporte de % de tiempo-asistencia por curso:
      </th>
      <th>
            <a href="index2.php?com=reportes&do=listtoexcel">
        	    <img src="images/iconos/excel.png" border="0">
            </a>
      </th>
      <th width="300">
          <table width="300">
      	<form id="adminForm" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>
?com=reportes&do=asistencia" method="post" name="adminForm">
    		<tr>
    			<td>Nombre: <input name="search" type = "text" id="search" value=""></td>
    		 	<td><input name="do_search" type="submit" id="do_search" value="Buscar"/></td>
    		 </tr>
    	</form>
    	</table>
      </th>
    </tr>
    </table>
    <table class="adminlist">
    <tr>
      <th class="title">#</th>
      <th class="title">Curso</th>
      <th class="title">Tutor</th>
      <th class="title">Horas acumuladas</th>
      <th class="title">Horas programadas</th>
      <th class="title">Procentaje ejecutado</th>
    </tr>
   <?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
$this->_sections['row']['start'] = $this->_sections['row']['step'] > 0 ? 0 : $this->_sections['row']['loop']-1;
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = $this->_sections['row']['loop'];
    if ($this->_sections['row']['total'] == 0)
        $this->_sections['row']['show'] = false;
} else
    $this->_sections['row']['total'] = 0;
if ($this->_sections['row']['show']):

            for ($this->_sections['row']['index'] = $this->_sections['row']['start'], $this->_sections['row']['iteration'] = 1;
                 $this->_sections['row']['iteration'] <= $this->_sections['row']['total'];
                 $this->_sections['row']['index'] += $this->_sections['row']['step'], $this->_sections['row']['iteration']++):
$this->_sections['row']['rownum'] = $this->_sections['row']['iteration'];
$this->_sections['row']['index_prev'] = $this->_sections['row']['index'] - $this->_sections['row']['step'];
$this->_sections['row']['index_next'] = $this->_sections['row']['index'] + $this->_sections['row']['step'];
$this->_sections['row']['first']      = ($this->_sections['row']['iteration'] == 1);
$this->_sections['row']['last']       = ($this->_sections['row']['iteration'] == $this->_sections['row']['total']);
?>
   <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#f4f4f4,#e8e8e8"), $this);?>
" 
       onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)">
      <td><?php echo $this->_sections['row']['iteration']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['curso']; ?>
 (<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['periodo']; ?>
)</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['tutor']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['acumulado']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['programado']; ?>
</td>
      <td><?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['porcentaje']; ?>
%  
      <a href="grafica.php?p=<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['programado']; ?>
&a=<?php echo $this->_tpl_vars['data'][$this->_sections['row']['index']]['acumulado']; ?>
 " rel="superbox[iframe][400x250]">Gráfica</a> 
      </td>
    </tr>
    <?php endfor; else: ?>
    <tr>
      <td colspan="8">No hay registros</td>
    </tr>
    <?php endif; ?>
    </table>
   
    <table class="adminlist">
		<tr>
			<th align="center" colspan="2"><?php echo $this->_tpl_vars['anchors']; ?>
</th>
		</tr>
		<tr>
			<th align="center" colspan="2"><?php echo $this->_tpl_vars['total']; ?>
</th>
		</tr>
	</table>
  </div>
</div>
<div id="break"></div>
</div>
