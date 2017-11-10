package patterns.decorator;

/**
 * Created by Oleh on 10.11.2017.
 */
public class ImageFiltration extends MethodDecorator{

    public ImageFiltration(IMethod method) {
        super(method);
    }

    public String makeFiltration(){
        return " Фільтрація ";
    }

    @Override
    public String applyMethod() {
        return super.applyMethod() + makeFiltration();
    }
}
