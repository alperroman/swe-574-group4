<tr id="rw_rate_type" class="rw-<?php echo ($odd ? "odd" : "even");?>">
    <td class="rw-ui-def-width">
        <span class="rw-ui-def">Type:</span>
    </td>
    <td>
        <div class="rw-ui-img-radio<?php if ($rw_options->type == "star") echo " rw-selected";?>" onclick="RWM.Set.type(RW.TYPE.STAR);">
            <i class="rw-ui-holder"><i class="rw-ui-sprite rw-ui-large rw-ui-stars rw-ui-default"></i></i>
            <span>Star</span>
            <input type="radio" tabindex="2" name="rw-type" value="star"<?php if ($rw_options->type == "star") echo ' checked="checked"';?> />
        </div>
        <div class="rw-ui-img-radio<?php if ($rw_options->type == "nero") echo " rw-selected";?>" onclick="RWM.Set.type(RW.TYPE.NERO);">
            <i class="rw-ui-holder"><i class="rw-ui-sprite rw-ui-large rw-ui-thumbup"></i></i>
            <span>Thumbs</span>
            <input type="radio" tabindex="3" name="rw-type" value="nero"<?php if ($rw_options->type == "nero") echo ' checked="checked"';?> />
        </div>
    </td>
</tr>