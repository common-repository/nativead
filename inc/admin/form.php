<div class="nativead-wrapper-header">
	<span>&nbsp;</span>
	<h2>Setup Integración NativeAD</h2>
</div>
<?php if ( isset( $_GET['settings-updated'] ) ) { ?>
<div class="wrap">
	<div id="message" class="updated">
		<p><strong><?php _e('Settings saved.') ?></strong></p>
	</div>
</div>
<?php } ?>

<div class="wrap">
	<p>Edita las opciones de integración en tu site.</p>
	<div class="postbox-container">
		<div class="metabox-holder">
			<div class="postbox" style="width:100%">
				<div class="inside">
					<form name="nativead-form" action="admin.php?page=nativead" method="post">
						<input type="hidden" name="nativead-form" value="1">
						<table class="form-table">
							<tbody>
								<tr>
									<th><label for="pgcache_prime_interval"> Red de afiliación: </label></th>
									<td>
										<span>Red de afiliación a la que pertenece: </span>
										<select id="nativead-adnetwork" name="nativead-adnetwork">
											<option value="lisvon" <?php if ( self::$adNetwork == 'lisvon' ) echo 'selected="selected"'; ?>>Lisvon</option>
											<option value="media-response-latam" <?php if ( self::$adNetwork == 'media-response-latam' ) echo 'selected="selected"'; ?>>Media Response LATAM</option>
											<option value="media-response-spain" <?php if ( self::$adNetwork == 'media-response-spain' ) echo 'selected="selected"'; ?>>Media Response Spain</option>
										</select>
									</td>
								</tr>
								<tr>
									<th><label> Incluir Tag NativeAD: </label></th>
									<td>
										<span> <i>Selecciona esta opción si quieres incluir automaticamente el Tag JavaScript de NativeAD. (* recomendado)</i></span>
										<br />
										<input name="nativead-autoTag" type="checkbox" <?php echo self::$autoTag == 'on' ? 'checked' : ''; ?> >
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<input type="submit" class="button-primary" value="<?php _e('Save'); ?>">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
			<div class="postbox">
				<h3><span>Soporte y Ayuda</span></h3>
				<div class="inside">
					<table class="form-table">
						<tbody>
							<tr>
								<th>Página del plugin</th>
								<td>
									Para soporte, ayuda técnica o cualquier pregunta puede enviar un email a: <a href="mailto:support@native.ad">support@native.ad</a>. <br />
									También puede ir a la documentación del plugin: <a href=" http://support.native.ad/" target="_blank">http://support.native.ad/</a> desde donde también podrá crear tickets con solicitudes de ayuda.
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>