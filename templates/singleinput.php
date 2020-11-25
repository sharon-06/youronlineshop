<!--
  It displays the properties of a node (a single property)
  It receives:
   editpropertyname
   (optional) labelNode, labelName and noEditLabel
--> 
<div style="padding-right:2.2em;">
  <div class="form-group">
    <div></div>
    <script>
      if (thisParams.labelNode) {
        thisParams.labelNode.refreshView(thisElement, "templates/singlelabel.php", {editpropertyname: thisParams.editpropertyname, noEditLabel: thisParams.noEditLabel});
      }
      else if (thisParams.labelName) {
        thisNode.refreshView(thisElement, "templates/singlelabel.php", {labelName: thisParams.labelName});
      }
    </script>
    <input class="form-field" name="" placeholder="">
    <script>
      thisNode.writeProperty(thisElement, thisParams.editpropertyname);
      thisElement.attributes.name.value=thisParams.editpropertyname;
      thisElement.attributes.placeholder.value=thisParams.editpropertyname;
    </script>
  </div>
</div>