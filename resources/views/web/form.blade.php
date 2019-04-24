		<form id="suggest-form" action="/s/">
			<div  class="tab-container">
				<div class="tab">
					<input  type="radio" name="style" id="buy-house"> <label for="buy-house">Mua nhà</label>
				</div> 
				<div class="tab"><input  type="radio" name="style" id="rent-house"> <label  for="rent-house">Thuê nhà</label>
				</div>
			</div> 
			<input type="hidden" id="hidServiceTypeChecked" value="mua"> 
			<div class="search-container">
				<a href="#"></a> <i class="zmdi zmdi-search"></i> 
				<input placeholder="Nhập địa điểm, khu dân cư, tòa nhà" type="search" autocomplete="off" spellcheck="false" dir="auto" class="search-input"> 
				<button type="submit" class="btn-primary btn-ultra btn-red btn-search">
					<i class="zmdi zmdi-search"></i> <span>Tìm Kiếm</span>
				</button> 
				<ul class="recent-search hide">
					<li><a style="pointer-events: none;"><span>Không có kết quả</span></a>
					</li>
				</ul>
			</div>
		</form>