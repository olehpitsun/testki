package patterns.decorator;

/**
 * Created by Oleh on 10.11.2017.
 */
public class HistrogramEqualization extends MethodDecorator {

    public HistrogramEqualization(IMethod method) {
        super(method);
    }

    public String HE(){
        return " Вирівнювання гістограми ";
    }

    @Override
    public String applyMethod() {
        return super.applyMethod() + HE();
    }
}
